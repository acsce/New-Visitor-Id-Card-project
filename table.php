<td valign="top">
                
                <table id='userinput' width="500px" bgcolor="#F0F1F3" class="textStyle" border="1">
                    <tr class="trStyle">
					<td align='left' >
						<a href="index.html"> 
                            <input type='button' value='BACK'  class="buttonStyle" />
                        </a>   
							
                        </td>
                        <td align='center' valign="middle" colspan="40" class="heading">
                            VISITOR INFORMATION DISPLAY PASS DATA
                        </td>
                    </tr>
					<tr class="trStyle">
                        <td colspan="2">
                            Pass_ID
                        </td>
						<td colspan="2">
                            First_Name
                        </td>
						<td colspan="2">
                            To_Meet
                        </td>
						<td colspan="2">
                            Representing
                        </td>
						
						<td colspan="2">
                            Mobile_No
                        </td>
						<td colspan="2">
                            Emaid_ID
                        </td>
						<td colspan="8">
                            Check_IN
                        </td>
						<td colspan="8">
                            Check_Out
                        </td>
						<td colspan="2">
                            status
                        </td>
						
                    </tr>
					
				
			</td>
			<?php 
					$con = mysqli_connect("localhost","root","");
					if (!$con)
					{
						die('Could not connect: ' . mysqli_error());
					}

					mysqli_select_db($con,"visitorinfo");
					$res = mysqli_query($con,"SELECT * FROM `visitorinfo` order by id desc"); //
						while($row=mysqli_fetch_array($res))
						{
							
							echo "<tr>";
								echo "<td colspan='2'>";echo $row["id"];echo "</td>";
								echo "<td colspan='2'>";echo $row["firstname"];echo "</td>";								
								echo "<td colspan='2'>";echo $row["tomeet"];echo "</td>";
								echo "<td colspan='2'>";echo $row["comingfrom"];echo "</td>";
								echo "<td colspan='2'>";echo $row["mobile"];echo "</td>";
								echo "<td colspan='2'>";echo $row["emailid"];echo "</td>";
								echo "<td colspan='8'>";echo $row["checkin"];echo "</td>";
								echo "<td colspan='8'>";echo $row["checkout"];echo "</td>";
								echo "<td colspan='2'>";echo $row["status"];echo "</td>";
							echo "</tr>";
							
						}
					
					?>
					</table>
                