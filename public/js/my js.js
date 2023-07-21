
      var d = new Date();
      var n = d.getFullYear();
      document.getElementById("demo").innerHTML = n ;

      $(document).ready(function(){
      	$('#Mybtn').click(function(){
        		$('#MyForm').toggle(1000);
        });
      });

      var globalSum = 0;

      function summerize(formfieldObj) {
        globalSum = 0 ;
        formulaObj = $(formfieldObj).parents("form");
        $(formulaObj).find("input[type='radio']:checked").each(function() {
          globalSum = parseInt($(this).val()) + globalSum;
          $("#totalprice").html(globalSum);
          $(formulaObj).find("input[name='total']").val(globalSum);
        });
      }

      function summerize1(formfieldObj) {
        globalSum = 0 ;
        formulaObj = $(formfieldObj).parents("form");
        $(formulaObj).find("input[type='radio']:checked").each(function() {
          globalSum = parseInt($(this).val()) + globalSum;
          $("#totalprice1").html(globalSum);
          $(formulaObj).find("input[name='total']").val(globalSum);
        });
      }

      function summerize2(formfieldObj) {
        globalSum = 0 ;
        formulaObj = $(formfieldObj).parents("form");
        $(formulaObj).find("input[type='radio']:checked").each(function() {
          globalSum = parseInt($(this).val()) + globalSum;
          $("#totalprice2").html(globalSum);
          $(formulaObj).find("input[name='total']").val(globalSum);
        });
      }

      function disappear(a)
      {

        if(a == 1 ) {
          document.getElementById('MyForm').style = "display:block;";
          document.getElementById('MyForm1').style = "display:none;";
          document.getElementById('MyForm2').style = "display:none;";
        }
        else if (a == 2 ) {
          document.getElementById('MyForm').style = "display:none;";
          document.getElementById('MyForm1').style = "display:block;";
          document.getElementById('MyForm2').style = "display:none;";
        }
        else if (a == 3) {
          document.getElementById('MyForm').style = "display:none;";
          document.getElementById('MyForm1').style = "display:none;";
          document.getElementById('MyForm2').style = "display:block;";
        }
      }

      function populate(s1,s2)
      {
      	var s1 = document.getElementById(s1);
      	var s2 = document.getElementById(s2);

      	s2.innerHTML = "";

      	if(s1.value == "المعرفة") {
    			var optionArray = ["111|111","110|110","109|109","108|108","107|107","105|105"];
        }
    		else if(s1.value == "العلم") {
    			var optionArray = ["100|100","101|101","102|102","103|103","104|104"];
    		}
        else if(s1.value == "الابداع") {
    			var optionArray = ["211|211","210|210","209|209","208|208","208|208","207|207","206|206","205|205"];
    		}
        else if(s1.value == "الحمكة") {
    			var optionArray = ["200|200","201|201","202|202","203|203","204|204"];
    		}
        else if(s1.value == "الريادة") {
    			var optionArray = ["311|311","310|210","309|309","308|308","308|308","307|307","306|306","305|305"];
    		}
        else if(s1.value == "التميز") {
    			var optionArray = ["300|300","301|301","302|302","303|303","304|304"];
    		}
        else if(s1.value == "النجاح") {
    			var optionArray = ["400|400","401|401","402|402","403|403","404|404","405|405","406|406"];
    		}

    		for ( var option in optionArray )
    		{
    			var pair = optionArray[option].split("|");
    			var newOption = document.createElement("option");

    			newOption.value = pair[0];
    			newOption.innerHTML = pair[1];

    			s2.options.add(newOption);
    		}
    	}
 