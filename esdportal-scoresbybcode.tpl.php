<h3>Scores for <?php print $school->name; ?></h3>
<?php if ($message): ?>
<?php print $message; ?>
<?php endif; ?>

<?php if ($hs_data): ?>
<?php $data = $hs_data; ?>

<?php if ($school_status == 'Mature'): ?>
<P STYLE="margin-bottom: 0.11in"><FONT FACE="Arial, serif"><FONT SIZE=2>High
Schools are graded using the following scale:</FONT></FONT></P>
<TABLE WIDTH=240 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=105>
  <COL WIDTH=105>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=5 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">Grading Scale</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"> <FONT FACE="Calibri, serif">A+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.90 to 1</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">A</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.76 to &lt;
      .90</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">B+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.70 to &lt;
      .76</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">B</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.60 to &lt;
      .70</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">C+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.55 to &lt;
      .60</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">C</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.45 to &lt;
      .55</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">D</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">&gt; .30 to &lt;
      .45</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=5 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">F</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">0 to .30</FONT></FONT></P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=344 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=229>
  <COL WIDTH=87>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#c0504d" STYLE="border: none; padding: 0in">
      <P><FONT COLOR="#ffffff"><FONT FACE="Calibri, serif"><B>Total
      Points (100  Points)</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#c0504d" STYLE="border: none; padding: 0in">
      <P ALIGN=RIGHT><FONT COLOR="#ffffff">&nbsp;</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border: 1px solid #ffffff; padding: 0in 0.08in">
      <P>&nbsp;</P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif"><I>Points Possible</I></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Academic Status</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">50</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Academic Progress</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">20</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">School Culture</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">30</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=5 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Total</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">100</FONT></P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['mature_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['mature_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'New'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
<FONT FACE="Arial, serif"><FONT SIZE=2>Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</FONT></FONT></P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, </FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2><B>OR</B></FONT></FONT></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having received an “A” in
  one of the 3 categories.</FONT></FONT></P>
</OL>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['total_pts']; ?> /
      <?php print $data['total_psspts']; ?> = <?php print $data['newschool_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['newschool_designation']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'Turnaround'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%"><A NAME="<?php print $data['_GoBack']; ?>"></A>
<FONT FACE="Arial, serif"><FONT SIZE=2>Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</FONT></FONT></P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</FONT></FONT></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having received An “A” in
  one of the 3 categories.</FONT></FONT></P>
</OL>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['turnaround_pts']; ?> /
      <?php print $data['turnaround_psspts']; ?> = <?php print $data['turnaround_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['turnaround_designation']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_pts']; ?> /
      <?php print $data['culture_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: no: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['status_pts']; ?> /
      <?php print $data['status_psspts']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['status_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ACT Composite Score (2
      Year Average)</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act2_comp']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act2_comp_pts']; ?> /
      <?php print $data['act2_comp_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ACT Percent College
      Ready</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act2_pcr']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act2_pcr_pts']; ?> /
      <?php print $data['act2_pcr_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Graduation Rate
      (2011-12)</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['gradrate']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['gradrate_pts']; ?> /
      <?php print $data['gradrate_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; ?>

<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Academic Progress</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['progress_pts']; ?> /
      <?php print $data['progress_psspts']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['progress_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Year-over-Year ACT
      Composite Score Gain (2 Year Average, 2010-11 to 2011-12, 2011-12
      to 2012-13)</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act_grwth']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['act_grwth_pts']; ?> /
      <?php print $data['act_grwth_psspts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
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
      <P><FONT FACE="Arial, serif"WIDTH=55>
  <COL WIDTH=41>
  <COL WIDTH=51>
  <COL WIDTH=160>
  <TR VALIGN=TOP>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Other Points</B></FONT></FONT></P>
    </TD>
    <TD COLSPAN=4 WIDTH=261 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['studchrs_pts']; ?> +
      <?php print $data['fafsa_rate_pts']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD ROWSPAN=2 WIDTH=160 HEIGHT=22 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)</FONT></FONT></P>
    </TD>
    <TD WIDTH=72 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SES</FONT></FONT></P>
    </TD>
    <TD WIDTH=55 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SpEd</FONT></FONT></P>
    </TD>
    <TD WIDTH=41 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ELL</FONT></FONT></P>
    </TD>
    <TD WIDTH=51 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Total</FONT></FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=72 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['econdis_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=55 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['sped_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=41 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['ell_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=51 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>FAFSA Completion Rate</FONT></FONT></P>
    </TD>
    <TD COLSPAN=4 WIDTH=261 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['fafsa_rate']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['fafsa_rate_pts']; ?></FONT></FONT></P>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php if ($k8_data): ?>
<?php $data = $k8_data; ?>

<?php if ($school_status == 'Mature'): ?>

<P STYLE="margin-bottom: 0.11in"><FONT FACE="Arial, serif"><FONT SIZE=2>K-8
Schools are graded using the following scale:</FONT></FONT></P>
<TABLE WIDTH=240 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=105>
  <COL WIDTH=105>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=5 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">Grading Scale</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"> <FONT FACE="Calibri, serif">A+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.90 to 1</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">A</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.76 to &lt;
      .90</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">B+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.70 to &lt;
      .76</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">B</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.60 to &lt;
      .70</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">C+</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.55 to &lt;
      .60</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">C</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">.45 to &lt;
      .55</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=6 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">D</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">&gt; .30 to &lt;
      .45</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=105 HEIGHT=5 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">F</FONT></FONT></P>
    </TD>
    <TD WIDTH=105 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
      <P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">0 to .30</FONT></FONT></P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=344 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=229>
  <COL WIDTH=87>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#c0504d" STYLE="border: none; padding: 0in">
      <P><FONT COLOR="#ffffff"><FONT FACE="Calibri, serif"><B>Total
      Points (100  Points)</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#c0504d" STYLE="border: none; padding: 0in">
      <P ALIGN=RIGHT><FONT COLOR="#ffffff">&nbsp;</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border: 1px solid #ffffff; padding: 0in 0.08in">
      <P>&nbsp;</P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: 1px solid #ffffff; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif"><I>Points Possible</I></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Academic Status</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">30</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Academic Progress</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">40</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=6 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">School Culture</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">30</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=229 HEIGHT=5 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff; border-right: 1px solid #ffffff; padding: 0in 0.08in">
      <P><FONT FACE="Calibri, serif">Total</FONT></P>
    </TD>
    <TD WIDTH=87 BGCOLOR="#f2dcdb" STYLE="border-top: none; border-bottom: 1px solid #ffffff; border-left: none; border-right: 1px solid #ffffff; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in">
      <P ALIGN=RIGHT><FONT FACE="Calibri, serif">100</FONT></P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['mature_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['mature_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'New'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%"><A NAME="<?php print $data['_GoBack']; ?>"></A>
<FONT FACE="Arial, serif"><FONT SIZE=2>Your school is classified as a
“New School.” New Schools do not earn a cumulative grade, rather
may earn a “Promising” designation by:</FONT></FONT></P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having participated in at
  least 60 of the possible 100 points, and earned 60% of the available
  points, </FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=2><B>OR</B></FONT></FONT></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having received an “A” in
  one of the 3 categories.</FONT></FONT></P>
</OL>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_earned']; ?> /
      <?php print $data['pts_possible']; ?> = <?php print $data['newschool_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['newschool_designation']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; if ($school_status == 'Turnaround'): ?>

<P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
<FONT FACE="Arial, serif"><FONT SIZE=2>Your school is classified as a
“Fresh Start School.” Fresh Start Schools are exempt from Status
counting towards their score and therefore do not earn a cumulative
grade, rather may earn a “Promising” designation by:</FONT></FONT></P>
<OL>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having earned at least 60% of
  the available points possible across the Progress and Climate
  categories, including extra credit, OR</FONT></FONT></P>
  <LI><P STYLE="margin-top: 0.02in; margin-bottom: 0.02in; background: #ffffff; line-height: 100%">
  <FONT FACE="Arial, serif"><FONT SIZE=2>having received An “A” in
  one of the 3 categories.</FONT></FONT></P>
</OL>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <COL WIDTH=194>
  <TR VALIGN=TOP>
    <TD WIDTH=194 HEIGHT=9 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Cumulative Grade</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['turnaround_pts_earned']; ?>
      / <?php print $data['turnaround_pts_possible']; ?> = <?php print $data['turnaround_pct']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['turnaround_designation']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Status Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['status_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Academic Progress Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['progress_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>School Climate Grade</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pts_culture']; ?> /
      <?php print $data['ptspos_culture']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['culture_ltrgrade']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other Points (Bonus)</FONT></FONT></P>
    </TD>
    <TD WIDTH=194 STYLE="border: none; padding: 0in">
      <P>D WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_status']; ?> /
      <?php print $data['ptspos_status']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['status_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Math Proficiency Rate
      (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_math']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_math_pts']; ?> /
      <?php print $data['pr2_math_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ELA (Reading + Writing)
      Proficiency Rate (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_ela']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_ela_pts']; ?> /
      <?php print $data['pr2_ela_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=149 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Other (Science &amp;
      Social Studies) Proficiency Rate (2-Year Average)</FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_other']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['pr2_other_pts']; ?> /
      <?php print $data['pr2_other_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=139 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>

<?php endif; ?>

<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <COL WIDTH=142>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Academic Progress</B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['pts_progress']; ?> /
      <?php print $data['ptspos_progress']; ?></B></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['progress_ltrgrade']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Performance Level Change
      Score</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['plc_comp']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['plc_comp_pts']; ?> /
      <?php print $data['plc_comp_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>NWEA/Scantron Percent
      Meeting Growth Target</FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['bench_comp']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['bench_comp_pts']; ?> /
      <?php print $data['bench_comp_ptsps']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=142 STYLE="border: none; padding: 0in">
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
<P STYLE="margin-bottom: 0.11in"><BR><BR>
</P>
<TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=160>
  <COL WIDTH=72>
  <COL WIDTH=55>
  <COL WIDTH=41>
  <COL WIDTH=51>
  <COL WIDTH=160>
  <TR VALIGN=TOP>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B>Other Points</B></FONT></FONT></P>
    </TD>
    <TD COLSPAN=4 WIDTH=261 STYLE="border: none; padding: 0in">
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><B><?php print $data['studchrs_pts']; ?></B></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD ROWSPAN=2 WIDTH=160 HEIGHT=22 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Challenge Factor
      (Socio-economic Status, Special Education, English Language
      Learners)</FONT></FONT></P>
    </TD>
    <TD WIDTH=72 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SES</FONT></FONT></P>
    </TD>
    <TD WIDTH=55 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>SpEd</FONT></FONT></P>
    </TD>
    <TD WIDTH=41 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>ELL</FONT></FONT></P>
    </TD>
    <TD WIDTH=51 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2>Total</FONT></FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=160 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs_pts']; ?></FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=72 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['econdis_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=55 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['sped_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=41 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['ell_pct']; ?></FONT></FONT></P>
    </TD>
    <TD WIDTH=51 STYLE="border: none; padding: 0in">
      <P><FONT FACE="Arial, serif"><FONT SIZE=2><?php print $data['studchrs']; ?></FONT></FONT></P>
    </TD>
  </TR>
</TABLE>

<?php endif; ?>

<?php print $form; ?>
