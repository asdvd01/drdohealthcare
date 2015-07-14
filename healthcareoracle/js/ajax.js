
	function medschange()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist = $("#meds").autocomplete({ 
      change: function() {
          medschange();
      }
   });
   mlist.autocomplete('option','change').call(mlist);
});	
function medschange1()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds1").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos1").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist1 = $("#meds1").autocomplete({ 
      change: function() {
          medschange1();
      }
   });
   mlist1.autocomplete('option','change').call(mlist1);
});	function medschange2()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds2").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos2").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist2 = $("#meds2").autocomplete({ 
      change: function() {
          medschange2();
      }
   });
   mlist2.autocomplete('option','change').call(mlist2);
});	function medschange3()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds3").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos3").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist3 = $("#meds3").autocomplete({ 
      change: function() {
          medschange3();
      }
   });
   mlist3.autocomplete('option','change').call(mlist3);
});		
function medschange4()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds4").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos4").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist4 = $("#meds4").autocomplete({ 
      change: function() {
          medschange4();
      }
   });
   mlist4.autocomplete('option','change').call(mlist4);
});		
function medschange5()
	{		//document.getElementById("wholeresult").innerHTML = "";
		var mname=$("#meds5").val();
				$.ajax
				({
					type: "POST",
					url: "ajax_bno.php",
					data: {"mname":mname},
					cache: false,
					success: function(html)
									{
										
										$("#bnos5").html(html);
									} 
				});
		
	}
	$(function () {  
  var mlist5 = $("#meds5").autocomplete({ 
      change: function() {
          medschange5();
      }
   });
   mlist5.autocomplete('option','change').call(mlist5);
});		



  