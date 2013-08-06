<h3>Scores for <?php print $school->name; ?></h3>
<?php if ($message): ?>
<?php print $message; ?>
<?php endif; ?>

<?php if ($hs_data): ?>
<?php $data = $hs_data; ?>

<?php if ($school_status == 'Mature'): ?>
<P STYLE="margin-bottom: 0.11in">High
Schools are graded using the following scale:</P>
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      <P>Grading Scale</P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P> A+</P>
    </TD>
    <TD>
      <P>.90 to 1</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>A</P>
    </TD>
    <TD>
      <P>.76 to &lt;
      .90</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>B+</P>
    </TD>
    <TD>
      <P>.70 to &lt;
      .76</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>B</P>
    </TD>
    <TD>
      <P>.60 to &lt;
      .70</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>C+</P>
    </TD>
    <TD>
      <P>.55 to &lt;
      .60</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>C</P>
    </TD>
    <TD>
      <P>.45 to &lt;
      .55</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>D</P>
    </TD>
    <TD>
      <P>&gt; .30 to &lt;
      .45</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>F</P>
    </TD>
    <TD>
      <P>0 to .30</P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Total
      Points (100  Points)</B></P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>&nbsp;</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>&nbsp;</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT><I>Points Possible</I></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>50</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>20</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Culture</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>30</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Total</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>100</P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['mature_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['mature_ltrgrade']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'New'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, <B>OR</B></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received an “A” in
  one of the 3 categories.</P>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['newschool_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['newschool_designation']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'Turnaround'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%"><A NAME="<?php print $data['_GoBack']; ?>"></A>
Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received An “A” in
  one of the 3 categories.</P>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['turnaround_pts']; ?> /
      <?php print $data['turnaround_psspts']; ?> = <?php print $data['turnaround_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['turnaround_designation']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P><B><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['status_ltrgrade']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>ACT Composite Score (2
      Year Average)</P>
    </TD>
    <TD>
      <P><?php print $data['act2_comp']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['act2_comp_pts']; ?> /
      <?php print $data['act2_comp_psspts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>ACT Percent College
      Ready</P>
    </TD>
    <TD>
      <P><?php print $data['act2_pcr']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['act2_pcr_pts']; ?> /
      <?php print $data['act2_pcr_psspts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Graduation Rate
      (2011-12)</P>
    </TD>
    <TD>
      <P><?php print $data['gradrate']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['gradrate_pts']; ?> /
      <?php print $data['gradrate_psspts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; ?>

<TABLE>
  <COL>
  <COL>
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Academic Progress</B></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><B><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['progress_ltrgrade']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Year-over-Year ACT
      Composite Score Gain (2 Year Average, 2010-11 to 2011-12, 2011-12
      to 2012-13)</P>
    </TD>
    <TD>
      <P><?php print $data['act_grwth']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['act_grwth_pts']; ?> /
      <?php print $data['act_grwth_psspts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>School Climate</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['culture_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Site Visit Average Score</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['site_s']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['site_s_pts']; ?> /
      <?php print $data['site_s_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Net 5Essentials
      (2012-13) Score</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P STYLE="margin-bottom: 0.11in"><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213_pts']; ?>
      /</FONT></FONT></P>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>5Essentials Growth Score</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['five_e_grwth']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['five_e_grwth_pts']; ?> /
      <?php print $data['five_e_grwth_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>

<TABLE>
  <COL>
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Other Points</B></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><B><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)</P>
    </TD>
    <TD>
      <P>SES</P>
    </TD>
    <TD>
      <P>SpEd</P>
    </TD>
    <TD>
      <P>ELL</P>
    </TD>
    <TD>
      <P>Total</P>
    </TD>
    <TD>
      <P><?php print $data['studchrs_pts']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><?php print $data['econdis_pct']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['sped_pct']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['ell_pct']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['studchrs']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>FAFSA Completion Rate</P>
    </TD>
    <TD>
      <P><?php print $data['fafsa_rate']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['fafsa_rate_pts']; ?></P>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php if ($k8_data): ?>
<?php $data = $k8_data; ?>

<?php if ($school_status == 'Mature'): ?>
<P STYLE="margin-bottom: 0.11in">K-8
Schools are graded using the following scale:</P>
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      <P>Grading Scale</P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P> A+</P>
    </TD>
    <TD>
      <P>.90 to 1</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>A</P>
    </TD>
    <TD>
      <P>.76 to &lt;
      .90</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>B+</P>
    </TD>
    <TD>
      <P>.70 to &lt;
      .76</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>B</P>
    </TD>
    <TD>
      <P>.60 to &lt;
      .70</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>C+</P>
    </TD>
    <TD>
      <P>.55 to &lt;
      .60</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>C</P>
    </TD>
    <TD>
      <P>.45 to &lt;
      .55</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>D</P>
    </TD>
    <TD>
      <P>&gt; .30 to &lt;
      .45</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>F</P>
    </TD>
    <TD>
      <P>0 to .30</P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE>
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Total
      Points (100  Points)</B></P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>&nbsp;</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>&nbsp;</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT><I>Points Possible</I></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>30</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>40</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Culture</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>30</P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Total</P>
    </TD>
    <TD>
      <P ALIGN=RIGHT>100</P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE>
  <COL style="width:16em;">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['mature_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['mature_ltrgrade']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P><?php print $data['studchrs_pts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'New'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%"><A NAME="<?php print $data['_GoBack']; ?>"></A>
Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, <B>OR</B></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received an “A” in
  one of the 3 categories.</P>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['newschool_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['newschool_designation']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P><?php print $data['studchrs_pts']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'Turnaround'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  having received An “A” in
  one of the 3 categories.</P>
</OL>
<TABLE>
  <COL style="width:16em">
  <COL>
  <COL>
  <TR>
    <TD>
      <P><B>Cumulative Grade</B></P>
    </TD>
    <TD>
      <P><B><?php print $data['turnaround_pts_earned']; ?>
      / <?php print $data['turnaround_pts_possible']; ?> = <?php print $data['turnaround_pct']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['turnaround_designation']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Status Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['status_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Academic Progress Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['progress_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>School Climate Grade</P>
    </TD>
    <TD>
      <P><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['culture_ltrgrade']; ?></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other Points (Bonus)</P>
    </TD>
    <TD>
      <P>D STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><B><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></B></P>
    </TD>
    <TD>
      <P><B><?php print $data['status_ltrgrade']; ?></B></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Math Proficiency Rate
      (2-Year Average)</P>
    </TD>
    <TD>
      <P><?php print $data['pr2_math']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['pr2_math_pts']; ?> /
      <?php print $data['pr2_math_ptsps']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>ELA (Reading + Writing)
      Proficiency Rate (2-Year Average)</P>
    </TD>
    <TD>
      <P><?php print $data['pr2_ela']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['pr2_ela_pts']; ?> /
      <?php print $data['pr2_ela_ptsps']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P>Other (Science &amp;
      Social Studies) Proficiency Rate (2-Year Average)</P>
    </TD>
    <TD>
      <P><?php print $data['pr2_other']; ?></P>
    </TD>
    <TD>
      <P><?php print $data['pr2_other_pts']; ?> /
      <?php print $data['pr2_other_ptsps']; ?></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; ?>

<TABLE WIDTH=623>
  <COL WIDTH=149>
  <COL WIDTH=139>
  <COL WIDTH=139>
  <COL WIDTH=139>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Academic Status</B></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></B></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['status_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Math Proficiency Rate
      (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_math']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_math_pts']; ?> /
      <?php print $data['pr2_math_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ELA (Reading + Writing)
      Proficiency Rate (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_ela']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_ela_pts']; ?> /
      <?php print $data['pr2_ela_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other (Science &amp;
      Social Studies) Proficiency Rate (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_other']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_other_pts']; ?> /
      <?php print $data['pr2_other_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Academic Progress</B></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></B></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['progress_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Performance Level Change
      Score</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['plc_comp']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['plc_comp_pts']; ?> /
      <?php print $data['plc_comp_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>NWEA/Scantron Percent
      Meeting Growth Target</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['bench_comp']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['bench_comp_pts']; ?> /
      <?php print $data['bench_comp_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>School Climate</B></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></B></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['culture_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Site Visit Average Score</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['site_s']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['site_s_pts']; ?> /
      <?php print $data['site_s_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Net 5Essentials
      (2012-13) Score</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P STYLE="margin-bottom: 0.11in"><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213_pts']; ?>
      /</FONT></FONT></P>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['net5e_1213_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>5Essentials Growth Score</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['five_e_grwth']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['five_e_grwth_pts']; ?> /
      <?php print $data['five_e_grwth_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623>
  <COL WIDTH=160>
  <COL WIDTH=72>
  <COL WIDTH=55>
  <COL WIDTH=41>
  <COL WIDTH=51>
  <COL WIDTH=160>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Other Points</B></FONT></FONT></P>
    </TD>
    <TD>
      <P><BR>
      </P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['studchrs_pts']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SES</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SpEd</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ELL</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Total</FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['econdis_pct']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['sped_pct']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['ell_pct']; ?></FONT></FONT></P>
    </TD>
    <TD>
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs']; ?></FONT></FONT></P>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php print $form; ?>
