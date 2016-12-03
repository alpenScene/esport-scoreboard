<?php

/*
  Title: eSports Scoreboard
  Standalone: true
  Description: List your most recent matches
 */
setlocale(LC_ALL, "de");

echo $before_widget;

echo $before_title;

echo $settings['essb_widget_title'];

echo $after_title;

	$matches = get_posts(array(
				'numberposts' => -1
				, 'post_type' => 'essb_match'
					));

	echo '<table id="scoreboard">';
	// The Loop
	foreach ($matches as $post) {
		
		$team1 = get_post(get_post_meta($post->ID, 'match_team1', true));
		$team2 = get_post(get_post_meta($post->ID, 'match_team2', true));
		$team1name = $team1->team_tag ? $team1->team_tag : $team1->post_title;
		$team2name = $team2->team_tag ? $team2->team_tag : $team2->post_title;
		$matchClosed = get_post_meta($post->ID, 'match_status', true) === 'closed';
		$score1 = get_post_meta($post->ID, 'match_score1', true);
		$score2 = get_post_meta($post->ID, 'match_score2', true);
		
		$date = strftime('%a, %d.%m. %H:%M', strtotime($post->match_date));
		$remaining = strtotime($post->match_date) - time();
		$days_remaining = floor($remaining / 86400);
		$hours_remaining = floor(($remaining % 86400) / 3600);
		$minutes_remaining = floor(($remaining % 3600) / 60);
		$countdown = $days_remaining . 'd' . $hours_remaining . 'h' . $minutes_remaining . 'm';
		
		if ($matchClosed && $score1 === $score2) {
			$team1result = 'draw';
			$team2result = 'draw';
		} elseif ($matchClosed && $score1 > $score2) {
			$team1result = 'win';
			$team2result = 'lose';
		} elseif ($matchClosed && $score1 < $score2) {
			$team1result = 'lose';
			$team2result = 'win';
		} else {
			$team1result = $team2result = 'open';
		}
		?> 
		<tr class="essb-match" <?php echo $matchClosed === true ? 'title="' . $date . '"' : ''?>>
			<td class="essb-data essb-team1 essb-<?php echo $team1result ?>">
				<a href="<?php echo $team1->team_url ?>" target="_blank" title="<?php echo $team1->post_title ?>">
					<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team1->team_country) ?>.png">
					<?php echo $team1name ?>
				</a>
			</td>
		<?php if ($matchClosed === true) : ?>
			<td class="essb-data essb-score1 essb-<?php echo $team1result ?>"><?php echo $score1 ?></td>
			<td class="essb-data essb-score2 essb-<?php echo $team2result ?>"><?php echo $score2 ?></td>
		<?php else : ?>
			<?php /* <td colspan=2 class="essb-data essb-date"><?php echo date('D, d.m.', strtotime($post->match_date)) ?></td> */ ?>
			<td colspan=2 class="essb-data essb-date"><span class="essb-fulldate"><?php echo $date ?></span><span class="essb-countdown"><?php echo $countdown ?></span></td>
		<?php endif ?>
			<td class="essb-data essb-team2 essb-<?php echo $team2result ?>">
				<a href="<?php echo $team2->team_url ?>" target="_blank" title="<?php echo $team2->post_title ?>">
					<?php echo $team2name ?>
					<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team2->team_country) ?>.png">
				</a>
			</td>
		</tr>
		<?php 
	}

echo '</table>';

echo $after_widget;
