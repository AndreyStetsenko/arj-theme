function calcthis(a) { 
	var depo = document.getElementById("deposit").value;
	if (depo < 0.00100000 ) {
		document.getElementById("inpvar1").innerHTML = "N/A"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>";
		document.getElementById("inpvar2").innerHTML =  "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+"N/A";			
		document.getElementById("inpvar3").innerHTML =  "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+"N/A";			
		//document.getElementById("inpvar3").innerHTML = "N/A"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>";			
		//document.getElementById("inpvar4").innerHTML =  "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+"N/A";			
	} else {
		per = 0.125 * 24;
	  	document.getElementById("inpvar1").innerHTML = per + " <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>" ;
	  	n = depo / 100 * per ;
	  	document.getElementById("inpvar2").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+n.toFixed(8);
	  	n = depo / 100 * (per * 30) ;
	  	document.getElementById("inpvar3").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+n.toFixed(8);
	  	//document.getElementById("inpvar3").innerHTML = "3.6"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>"  ;
	  	//m = depo/100*3.6 ;
	  	//document.getElementById("inpvar4").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+m.toFixed(2) ;
		if ( depo >= 0.50000000) {
			per = 0.165 * 24;
	  		document.getElementById("inpvar1").innerHTML = per + " <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>"  ;
	  		n = depo / 100 * per ;
	  		document.getElementById("inpvar2").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+n.toFixed(8) ;
	  		n = depo / 100 * (per * 30) ;
	  		document.getElementById("inpvar3").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+n.toFixed(8) ;
	  		//document.getElementById("inpvar3").innerHTML = "4.08"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>"  ;
	  		//m = depo/100*4.08 ;
	  		//document.getElementById("inpvar4").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+m.toFixed(2) ;
			
			if ( depo >= 1.00000000) {
				per = 0.210 * 24;
				document.getElementById("inpvar1").innerHTML = per + " <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>"  ;
				n = depo / 100 * per ;
				document.getElementById("inpvar2").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;;'></i> "+n.toFixed(8) ;
				n = depo / 100 * (per * 30) ;
				document.getElementById("inpvar3").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;;'></i> "+n.toFixed(8) ;
				//document.getElementById("inpvar3").innerHTML = "4.8"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>"  ;
				//m = depo/100*4.8 ;
				//document.getElementById("inpvar4").innerHTML = "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;;'></i> "+m.toFixed(2) ;
				//if ( depo >=1000000)
				//{
				//document.getElementById("inpvar1").innerHTML = "N/A"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>";
				//document.getElementById("inpvar2").innerHTML =  "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+"N/A";			
				//document.getElementById("inpvar3").innerHTML = "N/A"+" <i class='fa fa-percent' style='font-size:11px;color:#2690F7;;'></i>";			
				//document.getElementById("inpvar4").innerHTML =  "<i class='fa fa-btc' style='font-size:11px;line-height:15px;float:left;margin-right:4px;color:#33D37B;'></i> "+"N/A";			
				//}
		  	}
		}
	}
}