<?php

/*
  Title: eSports Scoreboard
  Standalone: true
  Description: List your most recent matches
 */

if(!is_post_type_archive('essb_match') ) {
	
	setlocale(LC_ALL, "de_DE");

	echo $before_widget;

	echo $before_title;

	echo $settings['essb_widget_title'];

	echo $after_title;

		$matches = get_posts(array(
					'numberposts' => $settings['essb_widget_limit']
					, 'post_type' => 'essb_match'
						));
		$matchcount = 0; ?>

		<table id="scoreboard">

		<?php // The Loop
		foreach ($matches as $post) :

			$team1 = get_post(get_post_meta($post->ID, 'match_team1', true));
			$team2 = get_post(get_post_meta($post->ID, 'match_team2', true));
			$team1name = $team1->team_tag ? $team1->team_tag : $team1->post_title;
			$team2name = $team2->team_tag ? $team2->team_tag : $team2->post_title;
			$matchDefwin = get_post_meta($post->ID, 'match_status', true) === 'defwin';
			$matchLinks = get_post_meta($post->ID, 'match_links', true);
			foreach ($matchLinks as $matchLink) {
				if ($matchLink['match_link_name'] === 'Matchlink') {
					$match_link = $matchLink['match_link_url'];
				} else {
					$match_link = false;
				}
			}

			if ($matchDefwin === false) {

				// if it's not a Defwin, get status, results and date and calculate countdown
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

			} elseif ($matchDefwin === true) {

				// if it's a Defwin get the defwin winner team meta
				$winner = get_post_meta($post->ID, 'match_defwin_winner', true);
				$team1result = $winner === 'team1' ? 'win' : 'lose';
				$team2result = $winner === 'team2' ? 'win' : 'lose';

			}

			?> 
			<tr class="essb-match" <?php echo $matchClosed || $matchDefwin ? ' title="' . $date . '"' : ''?>>

				<!-- Team 1 -->
				<td class="essb-data essb-team1 essb-<?php echo $team1result ?>">

					<?php if (strlen($team1->team_url) > 0) : ?>
						<a href="<?php echo $team1->team_url ?>" target="_blank" title="<?php echo $team1->post_title ?>">
					<?php endif ?>
						<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team1->team_country) ?>.png">
						<span title="<?php echo $team1->post_title ?>"><?php echo $team1name ?></span>
					<?php if (strlen($team1->team_url) > 0) : ?>
						</a>
					<?php endif ?>

				</td>

				<!-- Ergebnis / Datum -->
				<?php if ($matchClosed === true) : ?>
					<td class="essb-data essb-score1 essb-<?php echo $team1result ?>"><?php echo $score1 ?></td>
					<td class="essb-data essb-score2 essb-<?php echo $team2result ?>"><?php echo $score2 ?></td>
				<?php elseif ($matchClosed === false && $matchDefwin === false) : ?>
					<?php /* <td colspan=2 class="essb-data essb-date"><?php echo date('D, d.m.', strtotime($post->match_date)) ?></td> */ ?>
					<td colspan=2 class="essb-data essb-date">
						<span class="essb-fulldate"><?php echo $date ?></span>
						<span class="essb-countdown"><?php echo $remaining >= 0 ? $countdown : 'live' ?></span>
					</td>
				<?php elseif ($matchDefwin === true) : ?>
					<td colspan=2 class="essb-data essb-defwin">
						<?php echo $team1result === 'win' ? '&laquo; defwin' : 'defwin &raquo;' ?>
					</td>
				<?php endif ?>

				<!-- Team 2 -->
				<td class="essb-data essb-team2 essb-<?php echo $team2result ?>">
					<?php if (strlen($team2->team_url) > 0) : ?>
						<a href="<?php echo $team2->team_url ?>" target="_blank">
					<?php endif ?>
						<span title="<?php echo $team2->post_title ?>"><?php echo $team2name ?></span>
						<img src="http://flagpedia.net/data/flags/mini/<?php echo strtolower($team2->team_country) ?>.png">
					<?php if (strlen($team2->team_url) > 0) : ?>
						</a>
					<?php endif ?>
				</td>
				<td class="essb-matchlink">
					<?php if ($match_link) :?>
						<a href="<?php echo $match_link ?>" target="_blank" title="Matchlink">&raquo;</a>
					<?php endif ?>
				</td>

			</tr>

			<?php 
		endforeach; // matches ?>
			<tr>
				<td colspan="5" class="essb-more"><a href="<?php echo get_bloginfo('url') ?>/match">&raquo; All matches</a></td>
			</tr>
		</table>

	<?php 
	echo $after_widget;

	
}