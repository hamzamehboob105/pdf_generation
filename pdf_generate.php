<?php
require 'pdfcrowd-5.12.1/pdfcrowd.php';

if(isset($_POST['submit_val']))
{


// create an API client instance
$client = new \Pdfcrowd\HtmlToPdfClient("hamzatechy", "4ba7e41b76051a8a36443a84450b9183");
$fd = fopen($_SERVER['DOCUMENT_ROOT'] . "/test/myText.pdf",'wb');
// convert a web page and store the generated PDF into a variable
$pdf = $client->convertString('<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table Form</title>
</head>
<body>

<div class="main-sec" style="padding: 30px;">
	<table>
		<tbody>
			<tr>
				<td>
				<div class="main-date">
					<span>
						Date:
					</span>
					<span>
						2023-03-03
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 30px;font-weight: bold;font-size: 18px;">
					<span>
						Fullname:
					</span>
					<span>
						testzainu
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 30px;font-size: 18px;">
					<span>
						Address:
					</span>
					<span>
						 test
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Phone:
					</span>
					<span>
						 4343322
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 60px;font-size: 18px;">
					<span>
						All Property Services Inc. is pleased to present this proposal for the site improvements at your residence per<br>
						the associated design.
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 30px;font-weight: 900;font-size: 18px;text-decoration: underline;">
					<span>
						Scope of Work Includes:
					</span>
				
				</div>
				</td>
			</tr>


			<!-- New scope sec design -->

			<tr style="overflow-x:auto;">
				<td>
					<div style="overflow-x:auto;">
			<table style="text-align: initial;border-collapse: collapse;">
				<tr>
					<th class="detail" width="25%" style="border: 2px solid;text-align: start;padding-left: 7px;">
						Name 
					</th>
					<th class="detail" width="25%" style="border: 2px solid;text-align: start;padding-left: 7px;">
						Description
					</th>
					<th class="detail" width="25%" style="border: 2px solid;text-align: start;padding-left: 7px;">
						Price
					</th>
					<th class="detail" width="25%" style="border: 2px solid;text-align: start;padding-left: 7px;">
						Image 
					</th>
				</tr>
     		 <tr>
      			<td style="border: 2px solid;vertical-align: initial;padding: 7px 6px;padding-bottom: 60px;"> Porcelain Tile 2x2 open joint</td>
      			<td style="border: 2px solid;vertical-align: initial;padding: 7px 6px;padding-bottom: 60px;"> this is test</td>
				<td style="border: 2px solid;vertical-align: initial;padding: 7px 6px;padding-bottom: 60px;"> $25 </td>
				<td style="border: 2px solid;vertical-align: initial;padding: 7px 6px;padding-bottom: 60px;"> <img width="190" height="85" src="https://pickaps.com/wp-content/uploads/2020/12/APS_Logo-BlackText.png" </td>
			</tr>


    		</table>
    	</div>
    		</td>
    		</tr> 
			<!-- New scope sec design close -->




			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;padding-bottom: 30px;">
					<span>
						Project/Site Specific Notes:
					</span>
					<span style="font-weight: 500;">
						 test 
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;">
					<span>
						Total Project Cost:
					</span>
					<span>
						 $ 25 
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;">
					<span>
						Total Deposit:
					</span>
					<span>
						  $ 0.00 
					</span>
				</div>
				</td>
			</tr>




			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;">
					<span>
						Clients Signature:
					</span>
					<span>
						  <canvas class="jSignature" width="665" style="margin: 0px; padding: 0px; border: 1px solid; height: 0px; width: 45%;"></canvas>
					</span>
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;">
					<span>
						Date:
					</span>
					<span>
						  <canvas class="jSignature" width="665" style="margin: 0px; padding: 0px; border: 1px solid; height: 0px; width: 45%;"></canvas>
					</span>
				</div>
				</td>
			</tr>



			<tr>
				<td>
				<div class="main-info" style="padding-top: 60px;font-weight: bold;font-size: 18px;">
					<span>
						Exclusions:
					</span>
				
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Permits (if required)<br><br>
						Relocating of underground utilities (APS will call JULIE prior to starting work)<br><br>
						Irrigation or drainage installation or adjustments not already described.<br><br>
						Any Itemized pricing is dependent on all quoted work being completed as one project. Additional charges will
						apply if items are scheduled separately Proposed plantings are subject to availability and may need to be substituted for a similar plant of equal size and value.<br><br>
						 Client will be notified in advance of any required substitutions.
						Lawn restoration, if included will be completed with topsoil, seed and straw blanket. Sod will be available upon request at an additional cost.<br><br>
						Transplants are not covered under warranty.
					</span>
				</div>
				</td>
			</tr>



			<tr>
				<td>
				<div class="main-info" style="padding-top: 60px;font-weight: bold;font-size: 18px;">
					<span>
						Payment Terms:
					</span>
				
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						A deposit is required at acceptance of proposal. Balance is due upon completion of the project. This proposal<br><br>
						assumes payment for all invoices will be made by the due date on the invoice. Invoices unpaid or paid late will
						be charged an additional 2% per month.
						All Projects are bid for payment via<span style="font-weight:900;">Check</span>. Payment made by <span style="font-weight:900;">Credit Card</span> will be charged a fee of <span style="font-weight:900;">3%.</span><br><br>
						Payments made by <span style="font-weight:900;">Cash</span> will receive a Discount of <span style="font-weight:900;">3%.</span> <span style="font-weight:900;">(Up to $40,000)</span>

					</span>
				</div>
				</td>
			</tr>




			<tr>
				<td>
				<div class="main-info" style="padding-top: 60px;font-weight: bold;font-size: 18px;">
					<span>
						Indemnification:
					</span>
				
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Client agrees to indemnify, defend, and hold harmless All Property Services Inc., its agents, officers,
						employees, and its subcontractors from any and all claims, suits and causes of action related in any way to
						loss, damage, injury, and /or death to persons and property on the jobsite caused in whole, or in part, by the
						negligent, willful or intentional acts of the Client, its representatives, agents and employees. All Property
						Services Inc. agrees to indemnify, defend, and hold harmless Client of all claims as described above where
						the claim arises out of negligent, willful or intentional acts if All Property Services Inc.</span>

					</span>
				</div>
				</td>
			</tr>




			<tr>
				<td>
				<div class="main-info" style="padding-top: 60px;font-weight: bold;font-size: 18px;">
					<span>
						Contract Authorization:
					</span>
				
				</div>
				</td>
			</tr>


			<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						As authorization to proceed with this contract, we require written approval. Please have an authorized<br>
						representative of the client sign the signature block below.<br><br>
						If you have any questions regarding this proposal, please do not hesitate to contact us.<br>

				<br>Thank You for the opportunity to submit this proposal and we look forward to working with you on this project.</span>
				<p style="margin-top: 30px;"><br>Respectfully,</p>
					</span>


					<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;padding-bottom: 30px;">
					<span>
						All Property Services Inc.
					</span>
					<span style="font-weight: 500;">
						 Client:
					</span>
				</div>


				<tr>
				<td>
				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Doug Neff:
					</span>
					<span>
						  <canvas class="jSignature" width="665" style="margin: 0px; padding: 0px; border: 1px solid; height: 0px; width: 45%;"></canvas>
					</span>
				</div>



				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						President Signature:
					</span>
					
				</div>

				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					
					<span>
						  <canvas class="jSignature" width="665" style="margin: 0px; padding: 0px; border: 1px solid; height: 0px; width: 45%;"></canvas>
					</span>
				</div>


				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Printed Name:
					</span>
					
				</div>

				<div class="main-info" style="padding-top: 20px;font-size: 18px;font-weight: bold;">
					
					<span>
						  <canvas class="jSignature" width="665" style="margin: 0px; padding: 0px; border: 1px solid; height: 0px; width: 45%;"></canvas>
					</span>
				</div>


				<div class="main-info" style="padding-top: 20px;font-size: 18px;">
					<span>
						Date:
					</span>
					
				</div>




				</td>
			</tr>


				</td>
			</tr>



				</div>
				</td>
			</tr>




		</tbody>
	</table>
</div>


</body>
</html>');
fwrite($fd,$pdf);
fclose($fd);


die;

// set HTTP response headers
header("Content-Type: application/pdf");
header("Cache-Control: max-age=0");
header("Accept-Ranges: none");
header("Content-Disposition: attachment; filename=\"example_com.pdf\"");

// send the generated PDF 

}
?>

