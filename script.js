$(document).ready(function(){
    
    var maxVariable = 3000000;
    var minVariable = 1000;
    var regex = /\D/g;
    var check = document.querySelectorAll('input[type="radio"]');
    var boolClickOne = true;
    var boolClickTwo = true;
    var boolClickThree = false;


    for (var i=0;i<check.length;i++){
        check[i].addEventListener('click', function(event) {
            if(this.value == '1'){
                inputRadioCheck('yes');

            }else if(this.value == '2'){
                inputRadioCheck('no');

            }
        });
    }

    function inputRadioCheck(varCheck){
        if(varCheck == 'yes'){
            $('#summAddVckl').prop('disabled',false);
            $('#rangeTwo').css('pointer-events', 'all');
            $('#summAddVckl').val('1000');
        }else if(varCheck == 'no'){
            $('#summAddVckl').prop('disabled',true);
            $('#rangeTwo').css('pointer-events', 'none');
            $('#summAddVckl').val('0');
        }
    }

    function replaceStyle(inputOneVar, inputTwoVar, x, varRoute){
        var variableSumm = (100*x)/maxVariable;
        var color = 'linear-gradient(90deg,green ' +  variableSumm + '%,#000000 ' + variableSumm +'%)';
        $('.' + inputOneVar).css('background',color);
        if('route' == varRoute){
            $('.' + inputTwoVar).val(x);
        }
    }

    $('.num1').on('input', function(){
        var x = this.value;
        replaceStyle('num1', 'input-sum-person', x, 'route');
    });

    $('.num2').on('input', function(){
        var x = this.value;
        replaceStyle('num2', 'input-sum', x, 'route');
    });

    



    $('#summVckl').on('input', function(){
        var variableSumm = $('#summVckl').val();
        var routeVariableSumm = document.getElementById('rangeOne');
        console.log(variableSumm.match(regex));
        if(variableSumm == '' || variableSumm < minVariable || variableSumm > maxVariable || variableSumm.match(regex) != null){
            $('.warrior1').html('!');
            boolClickOne = false;
        }else{
            $('.warrior1').html('');
            routeVariableSumm.value = variableSumm;
            replaceStyle('num2', 'input-sum', variableSumm,'no');
            boolClickOne = true;
        }
        
    })
    $('#summAddVckl').on('input', function(){
        var variableSumm = $('#summAddVckl').val();
        var routeVariableSummAdd = document.getElementById('rangeTwo');
        if(variableSumm == '' || variableSumm < minVariable || variableSumm > maxVariable || variableSumm.match(regex) != null){
            $('.warrior2').html('!');
            boolClickTwo = false;
        }else{
            $('.warrior2').html('');
            routeVariableSummAdd.value = variableSumm;
            replaceStyle('num1', 'input-sum-person', variableSumm,'no');
            boolClickTwo = true;
        }
        
    })

    

 
    var daysInMonth,daysInYear;
    var massDays = [];
    
    $( function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            changeDay: true,
            showButtonPanel: true,
            dateFormat: 'dd.mm.yy',
            onClose: function(dateText, inst){
                var year = inst.selectedYear, month = inst.selectedMonth+1, day = inst.selectedDay;
                boolClickThree = true;
                $('.input-submit-calc-form').on('click', function(){
                    if(($( "#datepicker" ).val() == '') || (boolClickOne == false) || (boolClickTwo == false)){
                        console.log(($( "#datepicker" ).val() == '') + ' - ' + (boolClickOne == false) + ' - ' + (boolClickTwo == false));
                        $('.error-input').html('Какое то поле не заполнено, либо не правильно заполнен!');
                        $('.result-calc-num').html('Ошибка!');
                    }else if(boolClickOne == true || boolClickTwo == true){
                        for (let index = 0; index < 12 * $('#selectYear').val(); index++) {
                            daysInMonth = new Date(year, month + index, 0).getDate();
                            console.log(daysInMonth)
                            massDays.push(daysInMonth);
                        }
                        $.ajax({    
                            url: 'calc.php',
                            method: 'post',
                            dataType: 'html',
                            data: {
                                datepicker: $('#datepicker').val(),
                                summVckl: $('#summVckl').val(),
                                summAddVckl: $('#summAddVckl').val(),
                                selectYear: $('#selectYear').val(),
                                radioActive: $('#radioActive').val(),
                                daysInMonth: daysInMonth,
                                massDays: massDays,
                            },
                            success: function(data){
                                var number = parseFloat(data).toFixed(2);
                                $('.result-calc-num').html(number);
                                $('.error-input').html('');
                            }
                        })
                        massDays = [];
                        
                        
                    }
                    
                });
            },
        });    
    } );

    $('.input-submit-calc-form').on('click', function(){
        
        if($( "#datepicker" ).val() == ''){
            boolClickThree = false;
            console.log($( "#datepicker" ).val())
            alert('Вы не выбрали дату.')
        }
    });
})