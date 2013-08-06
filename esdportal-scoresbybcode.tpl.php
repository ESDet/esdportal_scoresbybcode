<h3>Scores for <?php print $school->name; ?></h3>
<?php if ($message): ?>
<?php print $message; ?>
<?php endif; ?>

<?php if ($hs_data): ?>
<?php $data = $hs_data; ?>

<?php if ($school_status == 'Mature'): ?>
<p>High Schools are graded using the following scale:</p>
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      Grading Scale
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
       A+
    </TD>
    <TD>
      .90 to 1
    </TD>
  </TR>
  <TR>
    <TD>
      A
    </TD>
    <TD>
      .76 to &lt;
      .90
    </TD>
  </TR>
  <TR>
    <TD>
      B+
    </TD>
    <TD>
      .70 to &lt;
      .76
    </TD>
  </TR>
  <TR>
    <TD>
      B
    </TD>
    <TD>
      .60 to &lt;
      .70
    </TD>
  </TR>
  <TR>
    <TD>
      C+
    </TD>
    <TD>
      .55 to &lt;
      .60
    </TD>
  </TR>
  <TR>
    <TD>
      C
    </TD>
    <TD>
      .45 to &lt;
      .55
    </TD>
  </TR>
  <TR>
    <TD>
      D
    </TD>
    <TD>
      &gt; .30 to &lt;
      .45
    </TD>
  </TR>
  <TR>
    <TD>
      F
    </TD>
    <TD>
      0 to .30
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>

<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      Total
      Points (100  Points)
    </TD>
    <TD>
      &nbsp;
    </TD>
  </TR>
  <TR>
    <TD>
      &nbsp;
    </TD>
    <TD>
      <I>Points Possible</I>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status
    </TD>
    <TD>
      50
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      20
    </TD>
  </TR>
  <TR>
    <TD>
      School Culture
    </TD>
    <TD>
      30
    </TD>
  </TR>
  <TR>
    <TD>
      Total
    </TD>
    <TD>
      100
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>

<P STYLE="margin-bottom: 0.11in"><BR><BR>

<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['mature_pct']; ?>
    </TD>
    <TD>
      <?php print $data['mature_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>


<?php endif; if ($school_status == 'New'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, OR
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received an “A” in
  one of the 3 categories.
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['newschool_pct']; ?>
    </TD>
    <TD>
      <?php print $data['newschool_designation']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>


<?php endif; if ($school_status == 'Turnaround'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%"><A NAME="<?php print $data['_GoBack']; ?>"></A>
Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received An “A” in
  one of the 3 categories.
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['turnaround_pts']; ?> /
      <?php print $data['turnaround_psspts']; ?> = <?php print $data['turnaround_pct']; ?>
    </TD>
    <TD>
      <?php print $data['turnaround_designation']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      ACT Composite Score (2
      Year Average)
    </TD>
    <TD>
      <?php print $data['act2_comp']; ?>
    </TD>
    <TD>
      <?php print $data['act2_comp_pts']; ?> /
      <?php print $data['act2_comp_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      ACT Percent College
      Ready
    </TD>
    <TD>
      <?php print $data['act2_pcr']; ?>
    </TD>
    <TD>
      <?php print $data['act2_pcr_pts']; ?> /
      <?php print $data['act2_pcr_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      Graduation Rate
      (2011-12)
    </TD>
    <TD>
      <?php print $data['gradrate']; ?>
    </TD>
    <TD>
      <?php print $data['gradrate_pts']; ?> /
      <?php print $data['gradrate_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>


<?php endif; ?>

<TABLE>
  <COL>
  <COL>
  <COL>
  <COL>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Year-over-Year ACT
      Composite Score Gain (2 Year Average, 2010-11 to 2011-12, 2011-12
      to 2012-13)
    </TD>
    <TD>
      <?php print $data['act_grwth']; ?>
    </TD>
    <TD>
      <?php print $data['act_grwth_pts']; ?> /
      <?php print $data['act_grwth_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>


<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      School Climate
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <BR>
      
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      Site Visit Average Score
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['site_s']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['site_s_pts']; ?> /
      <?php print $data['site_s_psspts']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <BR>
      
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      Net 5Essentials
      (2012-13) Score
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['net5e_1213']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P STYLE="margin-bottom: 0.11in"><?php print $data['net5e_1213_pts']; ?>
      /
      <?php print $data['net5e_1213_ptsps']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <BR>
      
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      5Essentials Growth Score
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['five_e_grwth']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <?php print $data['five_e_grwth_pts']; ?> /
      <?php print $data['five_e_grwth_psspts']; ?>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <BR>
      
    </TD>
  </TR>
</TABLE>

<TABLE>
  <COL>
  <COL>
  <COL>
  <TR>
    <TD>
      Other Points
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)
    </TD>
    <TD>
      SES
    </TD>
    <TD>
      SpEd
    </TD>
    <TD>
      ELL
    </TD>
    <TD>
      Total
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      <?php print $data['econdis_pct']; ?>
    </TD>
    <TD>
      <?php print $data['sped_pct']; ?>
    </TD>
    <TD>
      <?php print $data['ell_pct']; ?>
    </TD>
    <TD>
      <?php print $data['studchrs']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      FAFSA Completion Rate
    </TD>
    <TD>
      <?php print $data['fafsa_rate']; ?>
    </TD>
    <TD>
      <?php print $data['fafsa_rate_pts']; ?>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php if ($k8_data): ?>
<?php $data = $k8_data; ?>

<?php if ($school_status == 'Mature'): ?>
<P STYLE="margin-bottom: 0.11in">K-8
Schools are graded using the following scale:
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      Grading Scale
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
       A+
    </TD>
    <TD>
      .90 to 1
    </TD>
  </TR>
  <TR>
    <TD>
      A
    </TD>
    <TD>
      .76 to &lt;
      .90
    </TD>
  </TR>
  <TR>
    <TD>
      B+
    </TD>
    <TD>
      .70 to &lt;
      .76
    </TD>
  </TR>
  <TR>
    <TD>
      B
    </TD>
    <TD>
      .60 to &lt;
      .70
    </TD>
  </TR>
  <TR>
    <TD>
      C+
    </TD>
    <TD>
      .55 to &lt;
      .60
    </TD>
  </TR>
  <TR>
    <TD>
      C
    </TD>
    <TD>
      .45 to &lt;
      .55
    </TD>
  </TR>
  <TR>
    <TD>
      D
    </TD>
    <TD>
      &gt; .30 to &lt;
      .45
    </TD>
  </TR>
  <TR>
    <TD>
      F
    </TD>
    <TD>
      0 to .30
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>

<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      Total
      Points (100  Points)
    </TD>
    <TD>
      &nbsp;
    </TD>
  </TR>
  <TR>
    <TD>
      &nbsp;
    </TD>
    <TD>
      <I>Points Possible</I>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status
    </TD>
    <TD>
      30
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      40
    </TD>
  </TR>
  <TR>
    <TD>
      School Culture
    </TD>
    <TD>
      30
    </TD>
  </TR>
  <TR>
    <TD>
      Total
    </TD>
    <TD>
      100
    </TD>
  </TR>
</TABLE>

<TABLE>
  <COL style="width:16em;">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['mature_pct']; ?>
    </TD>
    <TD>
      <?php print $data['mature_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<?php endif; if ($school_status == 'New'): ?>

<p>Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</p>
<OL>
  <li>
  having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, OR
  <li>
  having received an “A” in
  one of the 3 categories.</li>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['newschool_pct']; ?>
    </TD>
    <TD>
      <?php print $data['newschool_designation']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<?php endif; if ($school_status == 'Turnaround'): ?>

<p>
Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</p>
<OL>
  <li>
  having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</li>
  <li>
  having received An “A” in
  one of the 3 categories.</li>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['turnaround_pts_earned']; ?>
      / <?php print $data['turnaround_pts_possible']; ?> = <?php print $data['turnaround_pct']; ?>
    </TD>
    <TD>
      <?php print $data['turnaround_designation']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      D STYLE="border: none; padding: 0in">
      <BR>
      
    </TD>
    <TD>
      <?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Math Proficiency Rate
      (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_math']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_math_pts']; ?> /
      <?php print $data['pr2_math_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      ELA (Reading + Writing)
      Proficiency Rate (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_ela']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_ela_pts']; ?> /
      <?php print $data['pr2_ela_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      Other (Science &amp;
      Social Studies) Proficiency Rate (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_other']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_other_pts']; ?> /
      <?php print $data['pr2_other_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<TABLE WIDTH=623>
  <COL WIDTH=149>
  <COL WIDTH=139>
  <COL WIDTH=139>
  <COL WIDTH=139>
  <TR>
    <TD>
      Academic Status
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Math Proficiency Rate
      (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_math']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_math_pts']; ?> /
      <?php print $data['pr2_math_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      ELA (Reading + Writing)
      Proficiency Rate (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_ela']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_ela_pts']; ?> /
      <?php print $data['pr2_ela_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      Other (Science &amp;
      Social Studies) Proficiency Rate (2-Year Average)
    </TD>
    <TD>
      <?php print $data['pr2_other']; ?>
    </TD>
    <TD>
      <?php print $data['pr2_other_pts']; ?> /
      <?php print $data['pr2_other_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<TABLE WIDTH=623>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Performance Level Change
      Score
    </TD>
    <TD>
      <?php print $data['plc_comp']; ?>
    </TD>
    <TD>
      <?php print $data['plc_comp_pts']; ?> /
      <?php print $data['plc_comp_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      NWEA/Scantron Percent
      Meeting Growth Target
    </TD>
    <TD>
      <?php print $data['bench_comp']; ?>
    </TD>
    <TD>
      <?php print $data['bench_comp_pts']; ?> /
      <?php print $data['bench_comp_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<TABLE WIDTH=623>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR>
    <TD>
      School Climate
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Site Visit Average Score
    </TD>
    <TD>
      <?php print $data['site_s']; ?>
    </TD>
    <TD>
      <?php print $data['site_s_pts']; ?> /
      <?php print $data['site_s_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      Net 5Essentials
      (2012-13) Score
    </TD>
    <TD>
      <?php print $data['net5e_1213']; ?>
    </TD>
    <TD>
      <?php print $data['net5e_1213_pts']; ?>
      /
      <?php print $data['net5e_1213_ptsps']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
  <TR>
    <TD>
      5Essentials Growth Score
    </TD>
    <TD>
      <?php print $data['five_e_grwth']; ?>
    </TD>
    <TD>
      <?php print $data['five_e_grwth_pts']; ?> /
      <?php print $data['five_e_grwth_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<TABLE WIDTH=623>
  <COL WIDTH=160>
  <COL WIDTH=72>
  <COL WIDTH=55>
  <COL WIDTH=41>
  <COL WIDTH=51>
  <COL WIDTH=160>
  <TR>
    <TD>
      Other Points
    </TD>
    <TD>
      <BR>
      
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)
    </TD>
    <TD>
      SES
    </TD>
    <TD>
      SpEd
    </TD>
    <TD>
      ELL
    </TD>
    <TD>
      Total
    </TD>
    <TD>
      <?php print $data['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      <?php print $data['econdis_pct']; ?>
    </TD>
    <TD>
      <?php print $data['sped_pct']; ?>
    </TD>
    <TD>
      <?php print $data['ell_pct']; ?>
    </TD>
    <TD>
      <?php print $data['studchrs']; ?>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php print $form; ?>
