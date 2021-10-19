<FORM method="post" action="bar.php">
    <TABLE border="3">
     <TR bgcolor="#ff0000">
      <TH>Name</TH>
      <TH>Value</TH>
     </TR>
     <TR>
      <TD>Name</TD>
      <TD>
       <input type="text" name="name" size="25h">
      </TD>
     </TR>
     <TR>
      <TD>Sex</TD>
      <TD>
       <input type="radio" name="sex" value="male"> Male
       <br>
       <input type="radio" name="sex" value="female" checked> Female
      </TD>
     </TR>
     <TR>
      <TD>Eye color</TD>
      <TD>
       <select name="eye color">
        <option>blue</option>
        <option>brown</option>
        <option selected>green</option>
        <option>other</option>
       </select>
      </TD>
     </TR>
     <TR>
      <TD>Check all that apply</TD>
      <TD>
       <input type="checkbox" name="height" value="1"> Over 6 feet tall</input>
       <br>
       <input type="checkbox" name="weight" value="1"> Over 200 pounds</input>
      </TD>
     </TR>
     <TR>
      <TD colspan="2">Describe your athletic ability:<br>
       <textarea name="athletic" cols="50" rows="4"></textarea>
      </TD>
     </TR>
     <TR>
      <TD colspan="2" align="center">
       <input type="submit" value="Enter my information">
      </TD>
     </TR>
    </TABLE>
   </FORM>