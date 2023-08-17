
<?php

    echo'<table border="1" width="100%">';
    echo'<caption>Du lieu bang Khach Hang 1</caption>';
    echo'<TR><TH>IDKH</TH><TH>Hoten</TH><TH>Pass</TH><TH>Phone</TH></TR>';
    for ($i = 0 ; $i < sizeof($khachHangList); $i++)
    {
    echo '<TR>
            <TD>'.$khachHangList[$i]->id.'</TD>
            <TD>'.$khachHangList[$i]->name.'</TD>
            <TD>'.$khachHangList[$i]->pass.'</TD>
            <TD>'.$khachHangList[$i]->phone.'</TD>
          </TR>';     
  }
echo'</TABLE>';
?>
