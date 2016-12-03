<?php

/*
  Title: eSports Scoreboard
  Standalone: true
  Description: List your most recent matchups
 */

echo $before_widget;

echo $before_title;

echo $settings['essb_widget_title'];

echo $after_title;

echo '<div id="scoreboard">';


	$matchups = get_posts(array(
				'numberposts' => -1
				, 'post_type' => 'essb_matchup'
					));

	echo '<table>';
	// The Loop
	foreach ($matchups as $post) {
		
		$team1 = get_post(get_post_meta($post->ID, 'matchup_team1', true));
		$team2 = get_post(get_post_meta($post->ID, 'matchup_team2', true));
		$matchClosed = get_post_meta($post->ID, 'matchup_status', true) === 'closed';
		$score1 = get_post_meta($post->ID, 'matchup_score1', true);
		$score2 = get_post_meta($post->ID, 'matchup_score2', true);
		
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
		<tr>
			<td class="result-<?php echo $team1result ?>">
				<a href="<?php echo $team1->team_url ?>" target="_blank" title="<?php echo $team1->post_title ?>">
					<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team1->team_country) ?>.png" style="width: 20px">
					<?php echo $team1->team_tag ? $team1->team_tag : $team1->post_title ?>
				</a>
			</td>
		<?php if ($matchClosed === true) : ?>
			<td class="result-<?php echo $team1result ?>"><?php echo $score1 ?></td>
			<td class="result-<?php echo $team2result ?>"><?php echo $score2 ?></td>
		<?php else : ?>
			<td colspan=2><?php echo $post->matchup_date ?></td>
		<?php endif ?>
			<td class="result-<?php echo $team2result ?>">
				<a href="<?php echo $team2->team_url ?>" target="_blank" title="<?php echo $team2->post_title ?>">
					<?php echo $team2->team_tag ? $team2->team_tag : $team2->post_title ?>
					<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team2->team_country) ?>.png" style="width: 20px">
				</a>
			</td>
		</tr>
		<?php 
	}

echo '</table>';


echo '</div>';

echo $after_widget;
