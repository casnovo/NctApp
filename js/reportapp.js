$(function() {

});
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "../php/table.php?q=" + str, true);
        xmlhttp.send();
    }
}
function insertData() {
	
					var value = "";
					var endrsus= "";
					var getrsus= [];			
     				//loop for each checked checkbox
    			 	$("input[type=checkbox]:checked").each(function() {
					
      				value = value + $(this).val() + ",";
										
     				});
					var c = value.substring(0, value.length-1);
					endvalue = "["+c+"]";
					//loop for ผู้ต้องหา
					var rsus= $("#rsus").val();
	
		    		var k = 0 ;
 								
		         		while(k < rsus){
							j = k+1;
							getrsus[k] = '"first":'+'"'+$("#first_name"+j).val()+'","age":"'+$("#age"+j).val()+'","address":"'+$("#address"+j).val()+'",'
							endrsus += getrsus[k];
							k++;
						}
						var a = endrsus.substring(0, endrsus.length-1);
						endrsus = "[{"+a+"}]";
					var opc= $("#opc").val();
				$.post("../php/savedata.php",{
				rid:$("#rid").val(),
				rtime:$("#rtime").val() ,
				rdate:$("#rdate").val(),
				uid:$("#uid").val(),
				rlm:$("#rlm").val(),
				r1:endvalue,
				r2:$("#av6").val(),
				rplace:$("#rplace").val(),
				rcdetiil:$("#rcdetiil").val(),
				rsus:$("#rsus").val(),
				rdetiil:endrsus ,
				rstation:$("#rstation").val(),
				rstationp:$("#rstationp").val(),
				rstationd:$("#rstationd").val(),
				rstationd2:$("#rstationd2").val(),
				stime:$("#stime").val() ,
				sdate:$("#sdate").val(),
				opc:opc,
				cid:$("#cid").val(),
				
				
				
			},

				function(result){
				
  				var printContents = result ;
  					var popupWin = window.open('', '_blank', 'width=800,height=600');
 				 	popupWin.document.open()
 				 	popupWin.document.write('<html><head></head><body onload="window.print()">' + printContents + '</html>');
  					popupWin.document.close();
	
				});
	

}


function printData1(){
					var value = "";
					var value2 = "";
					var value3 = "";
					var z = 0 ;
     				//loop for each checked checkbox
    			 	$("input[type=checkbox]:checked").each(function() {
					
      				value = value + $(this).val() + ",";
										
     				});
					var c = value.substring(0, value.length-1);
					endvalue = "["+c+"]";
				$.post("../php/re-print.php",{
				rid:$("#rid").val(),
				rtime:$("#rtime").val() ,
				rdate:$("#rdate").val(),
				r1:endvalue,
				r2:value2,
				r3:$("#av6").val(),
				rplace:$("#rplace").val(),
				rcdetiil:$("#rcdetiil").val(),
				rsus:$("#rsus").val(),
			},

				function(result){
				
  				var printContents = result ;
  					var popupWin = window.open('', '_blank', 'width=800,height=600');
 				 	popupWin.document.open()
 				 	popupWin.document.write('<html><head></head><body onload="window.print()">' + printContents + '</html>');
  					popupWin.document.close();
	
				});
	

}
function printData2(){
	
					var value = "";
					var endrsus= "";
					var getrsus= [];			
     				//loop for each checked checkbox
    			 	$("input[type=checkbox]:checked").each(function() {
					
      				value = value + $(this).val() + ",";
										
     				});
					var c = value.substring(0, value.length-1);
					endvalue = "["+c+"]";
					//loop for ผู้ต้องหา
					var rsus= $("#rsus").val();
	
		    		var k = 0 ;
 								
		         		while(k < rsus){
							j = k+1;
							getrsus[k] = '"first":'+'"'+$("#first_name"+j).val()+'","age":"'+$("#age"+j).val()+'","address":"'+$("#address"+j).val()+'",'
							endrsus += getrsus[k];
							k++;
						}
						var a = endrsus.substring(0, endrsus.length-1);
						endrsus = "[{"+a+"}]";
					var opc= $("#opc").val();
				$.post("../php/re-print2.php",{
				rid:$("#rid").val(),
				rtime:$("#rtime").val() ,
				rdate:$("#rdate").val(),
				uid:$("#uid").val(),
				rlm:$("#rlm").val(),
				r1:endvalue,
				r2:$("#av6").val(),
				rplace:$("#rplace").val(),
				rcdetiil:$("#rcdetiil").val(),
				rsus:$("#rsus").val(),
				rdetiil:endrsus ,
				rstation:$("#rstation").val(),
				rstationp:$("#rstationp").val(),
				rstationd:$("#rstationd").val(),
				rstationd2:$("#rstationd2").val(),
				stime:$("#stime").val() ,
				sdate:$("#sdate").val(),
				opc:opc,
				cid:$("#cid").val(),
				
				
				
			},

				function(result){
				
  				var printContents = result ;
  					var popupWin = window.open('', '_blank', 'width=800,height=600');
 				 	popupWin.document.open()
 				 	popupWin.document.write('<html><head></head><body onload="window.print()">' + printContents + '</html>');
  					popupWin.document.close();
	
				});
	

}
