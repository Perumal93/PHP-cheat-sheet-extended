
	<div id="sidebar">
		<h3 id="php-version">
			This page has been generated with <strong>PHP <?php print htmlspecialchars( PHP_VERSION, ENT_QUOTES, 'UTF-8' ); ?></strong>
			<span>Browse <a href="./<?php if ( isset( $dir ) ) print $dir; ?>static_results">other versions</a>.</span>
		</h3>
	</div>


	<div id="accordion">
		<h3>Important notes on the comparisons and tests:</h3>
		<div>
			<ol>
				<li>There appear to be two null values at the start of the test. The first one is actually an unset variable, i.e. no longer in existence. The second is a variable which was set to null.</li>
				<li>Tests with Ctype and strcmp-type functions use the system default C locale. Results may vary for other locales.</li>
				<li>Some tests might seem a bit &lsquo;silly&rsquo;, for instance testing with <code>=== 'null'</code>. The reason for adding these tests can be divided into two categories:
					<ol>
						<li>Data received from databases and $_POST/$_GET/etc variables are always received as strings (<em>unless a potentially used database abstraction layer changes this</em>). So sometimes testing for a string value where a non-string variable type would be more logical, can actually make sense.</li>
						<li>Some are unfortunately regularly encountered in code and added here to illustrate why not to use them.</li>
					</ol>
				</li>
				<li><strong>BEWARE</strong>: some variable changing functions will not return a changed value, but will return whether the changing succeeded. You will find this indicated in the function header by the use of <code>$copy</code> (as the test will use a copy of the variable to not influence the other tests in the same table).</li>
			</ol>
		</div>

<?php
	include( APP_DIR . '/include/vars-to-test.php' );
	if ( is_array( $legend_array ) && $legend_array !== array() ):
?>
		<h3>Notes on some variables:</h3>
		<div>
			<p>Some of the test variables used, do not print the way they are set, either because they contain invisible characters or because they result in something else, so for your convenience, these are outlined here:</p>
			<table>
				<tr>
					<th width="40">&dagger;</th>
					<th>How the variable is defined:</th>
<?php //					<th>Will show in the table as:</th> ?>
				</tr>

<?php
		foreach ( $legend_array as $k => $v ):
?>
				<tr>
					<th id="var-legend-<?php echo $k; ?>"><?php echo $k; ?></th>
					<td><code><?php echo $v; ?></code></td>
<?php //					<td><?php pr_var( $test_array[$k], '', true, true ); ? ></td> ?>
				</tr>
<?php
		endforeach;
?>
			</table>
		</div>
<?php
	endif;
?>

		<h3>Legend / How to use the tables:</h3>
		<div>
			<ul>
				<li>The error level for this test sheet has been set to <code>E_ALL &amp; ~E_STRICT</code>. All errors are caught and referenced (with #links) in the tables with details of the error messages (if any) below each table. Similar error messages are grouped together for your convenience.</li>
				<li>Some column labels have been shortened to avoid them taking undue space. These are indicated by a <code>&hellip;</code>. If you mouse-over the column label you will see the full variable/test information.</li>
				<li>In <strong><em>comparison tables</em></strong>, the left-top table header will indicate the comparison used and link to the relevant page in the PHP Manual.</li>
				<li>In <strong><em>test tables</em></strong>, the left top table header indicates the type of tests. Both this header as well as most column headers link to their respective relevant PHP Manual pages.</li>
				<li>A &Dagger; with a number next to a column header means there is a (linked) footnote for that entry at the bottom of the page.</li>
				<li>When you mouse-over the table the row and column you are at are <span class="hover">highlighted</span>. To help you compare specific columns/rows, you can click on any cell to mark the column and row which the cell intersects for <span class="sticky">extra highlighting</span>. Click again to remove this sticky highlight.</li>
<?php	/*		<li>If there is a definite <em>best</em> way for doing something, the column will be highlighted in <span class="best">green</span>. Other <em>good</em> ways will be highlighted in <span class="good">light green</span>.
					<br /><br />Best will normally have been determined by combining:
					<ol>
						<li>The results.</li>
						<li>Consistency of results across PHP versions.</li>
						<li>Speed benchmark if several method are equally good.</li>
					</ol>
				</li>*/ ?>
			</ul>

			<h4>Legend to the color coding</h4>
			<table>
				<tr>
					<th>NULL:</th>
					<td><?php pr_var( null, '', true, true ); ?></td>
				</tr>
				<tr>
					<th>Boolean:</th>
					<td><?php pr_bool( true ); ?> / <?php pr_bool( false ); ?></td>
				</tr>
				<tr>
					<th>Integer:</th>
					<td><?php pr_int( 123456789 ); ?> / <?php pr_int( 0 ); ?></td>
				</tr>
				<tr>
					<th>Float:</th>
					<td><?php pr_flt( 12345.6789 ); ?></td>
				</tr>
				<tr>
					<th>String:</th>
					<td><?php pr_str( 'A string' ); ?></td>
				</tr>
				<tr>
					<th>Array and Object:</th>
					<td>Indicated as such. Array keys, array values and object properties will be color coded according to the coding shown here.</td>
				</tr>
				<tr>
					<th>Resources:</th>
					<td><?php pr_var( fopen( APP_DIR . '/include/resource.txt', 'r' ), '', true, true ); ?></td>
				</tr>
			</table>
		</div>

	</div>

