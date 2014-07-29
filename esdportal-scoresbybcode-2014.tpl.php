<h3><?php print $year; ?> scores for <?php print $school->name; ?></h3>
<?php if ($message): ?>
<?php print $message; ?>
<?php endif; ?>

</pre>

<p>
  For more detailed information on grading scales and methodology, please refer the following PDF:
</p>
<p>
  <strong><a href="http://www.excellentschoolsdetroit.org/sites/www.excellentschoolsdetroit.org/files/esd_k12_rulebook_march2014_0.pdf">ESD K12 Rulebook and Scoring Methodology PDF</a></strong>
</p>

<?php if (count($data['esd_hs_2014']) > 1): ?>

<?php if ($school_status == 'Mature'): ?>
<p>High Schools are graded using the following scale:</p>
<TABLE class="grading-scale">
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
      .75 to &lt;
      .90
    </TD>
  </TR>
  <TR>
    <TD>
      B+
    </TD>
    <TD>
      .70 to &lt;
      .75
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
      .30 to &lt;
      .45
    </TD>
  </TR>
  <TR>
    <TD>
      F
    </TD>
    <TD>
      0 to &lt;
      .30
    </TD>
  </TR>
    <TR>
    <TD>
      N/A
    </TD>
    <TD>
      No Grade
    </TD>
  </TR>
</TABLE>

<?php endif; if ($school_status == 'New'): ?>

<p>
Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</p>
<OL>
  <LI>
  having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, OR</LI>
  <LI>
  having received an “A” in
  one of the 3 categories.</LI>
</OL>

<?php endif; if ($school_status == 'Turnaround'): ?>

<p>Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</p>
<OL>
  <LI>
  having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</LI>
  <LI>
  having received An “A” in
  one of the 3 categories.</LI>
</OL>

<?php endif; if ($school_status == 'Specialty'): ?>

<p>Your school is designated a "Specialty" school. A specialty school serves students that have unique learning needs or skills. Examples can include: adult education and alternative learning programs. Due to the unique settings of these schools, we are unable to produce a grade.</p>

<?php endif; ?>

<TABLE class="grading-scale">
  <COL>
  <COL>
  <TR>
    <TD>
      Total
      Weight of Sub-categories (100%)
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
      <I>Percentage weight towards total grade:</I>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status
    </TD>
    <TD>
      50%
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      20%
    </TD>
  </TR>
  <TR>
    <TD>
      School Culture
    </TD>
    <TD>
      30%
    </TD>
  </TR>
  <TR>
    <TD>
      Total
    </TD>
    <TD>
      100%
    </TD>
  </TR>
</TABLE>

<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      Cumulative Grade
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['total_pct']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['total_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['status_pts']; ?> /
      <?php print $data['esd_hs_2014']['status_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['progress_pts']; ?> /
      <?php print $data['esd_hs_2014']['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['culture_pts']; ?> /
      <?php print $data['esd_hs_2014']['culture_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['studchrs_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

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
      <?php print $data['esd_hs_2014']['progress_pts']; ?> /
      <?php print $data['esd_hs_2014']['progress_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Year-over-Year ACT
      Composite Score Gain (2 Year Average, 2010-11 to 2011-12, 2011-12
      to 2012-13)
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['act_grwth']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['act_grwth_pts']; ?> /
      <?php print $data['esd_hs_2014']['act_grwth_psspts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

<TABLE>
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
      <?php print $data['esd_hs_2014']['culture_pts']; ?> /
      <?php print $data['esd_hs_2014']['culture_psspts']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD>
      Site Visit Average Score
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['site_s']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['site_s_pts']; ?> /
      <?php print $data['esd_hs_2014']['site_s_psspts']; ?>
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
      <?php print $data['esd_hs_2014']['net5e']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['net5e_pts']; ?>
      /
      <?php print $data['esd_hs_2014']['net5e_psspts']; ?>
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
      <?php print $data['esd_hs_2014']['five_e_grwth']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['five_e_grwth_pts']; ?> /
      <?php print $data['esd_hs_2014']['five_e_grwth_psspts']; ?>
    </TD>
    <TD>
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
      <?php print $data['esd_hs_2014']['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD ROWSPAN=2>
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
      <?php print $data['esd_hs_2014']['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      <?php print $data['esd_hs_2013']['econdis_pct']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2013']['sped_pct']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2013']['ell_pct']; ?>
    </TD>
    <TD>
      <?php print $data['esd_hs_2014']['studchrs']; ?>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php if (count($data['esd_k8_2014']) > 1): ?>

<?php if ($school_status == 'Mature'): ?>
<p>K-8 Schools are graded using the following scale:</p>
<TABLE class="grading-scale">
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
      .30 to &lt;
      .45
    </TD>
  </TR>
  <TR>
    <TD>
      F
    </TD>
    <TD>
      0 to &lt;
      .30
    </TD>
  </TR>
  </TR>
    <TR>
    <TD>
      N/A
    </TD>
    <TD>
      No Grade
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

<?php endif; if ($school_status == 'Specialty'): ?>

<p>Your school is designated a "Specialty" school. A specialty school serves students that have unique learning needs or skills. Examples can include: adult education and alternative learning programs. Due to the unique settings of these schools, we are unable to produce a grade.</p>

<?php endif; ?>

<TABLE class="grading-scale">
  <COL>
  <COL>
  <TR>
    <TD>
      Total
      Weight of Sub-categories (100%)
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
      <I>Percentage weight towards total grade:</I>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status
    </TD>
    <TD>
      30%
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress
    </TD>
    <TD>
      40%
    </TD>
  </TR>
  <TR>
    <TD>
      School Culture
    </TD>
    <TD>
      30%
    </TD>
  </TR>
  <TR>
    <TD>
      Total
    </TD>
    <TD>
      100%
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
      <?php print $data['esd_k8_2014']['total_pct']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['total_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Status Grade
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pts_status']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Academic Progress Grade
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pts_progress']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      School Climate Grade
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pts_culture']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Other Points (Bonus)
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['studchrs_pts']; ?>
    </TD>
    <TD>
      <BR>
      
    </TD>
  </TR>
</TABLE>

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
      <?php print $data['esd_k8_2014']['pts_status']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_status']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['status_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Math Proficiency Rate
      (2-Year Average)
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pr2_math']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pr2_math_pts']; ?> /
      <?php print $data['esd_k8_2014']['pr2_math_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['pr2_ela']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pr2_ela_pts']; ?> /
      <?php print $data['esd_k8_2014']['pr2_ela_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['pr2_other']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['pr2_other_pts']; ?> /
      <?php print $data['esd_k8_2014']['pr2_other_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['pts_progress']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_progress']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['progress_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Performance Level Change
      Score
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['plc_comp']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['plc_comp_pts']; ?> /
      <?php print $data['esd_k8_2014']['plc_comp_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['bench_comp']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['bench_comp_pts']; ?> /
      <?php print $data['esd_k8_2014']['bench_comp_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['pts_culture']; ?> /
      <?php print $data['esd_k8_2014']['ptspos_culture']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['culture_ltrgrade']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      Site Visit Average Score
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['site_s']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['site_s_pts']; ?> /
      <?php print $data['esd_k8_2014']['site_s_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['net5e']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['net5e_pts']; ?>
      /
      <?php print $data['esd_k8_2014']['net5e_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['five_e_grwth']; ?>
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['five_e_grwth_pts']; ?> /
      <?php print $data['esd_k8_2014']['five_e_grwth_ptsps']; ?>
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
      <?php print $data['esd_k8_2014']['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD ROWSPAN=2>
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
      <?php print $data['esd_k8_2014']['studchrs_pts']; ?>
    </TD>
  </TR>
  <TR>
    <TD>
      <?php print round($data['esd_k8_2013']['econdis_pct']*100, 2); ?>%
    </TD>
    <TD>
      <?php print round($data['esd_k8_2013']['sped_pct']*100, 2); ?>%
    </TD>
    <TD>
      <?php print round($data['esd_k8_2013']['ell_pct']*100, 2); ?>%
    </TD>
    <TD>
      <?php print $data['esd_k8_2014']['studchrs']; ?>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php print $form; ?>
