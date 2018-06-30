function valida_cpf(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;
     
    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
     
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
     
    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
     
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}


function cadastraParticipante(){
    var cpf = $('#CPF').val();

    var cpfval = cpf.split('.').join();
    cpfval = cpfval.split('-').join();

    if(valida_cpf(cpfval)){
        $.post('../controle/cadastraParticipante.php', 
        {Nome: $('#Nome').val(),
        CPF: $('#CPF').val(),
        RG: $('#RG').val(),
        ufRG: $('#ufRG').val(),
        Telefone: $('#Telefone').val(),
        Email: $('#Email').val(),
        Logradouro: $('#Logradouro').val(),
        Numero: $('#Numero').val(),
        Bairro: $('#Bairro').val(),
        CEP: cpf,
        Complemento: $('#Complemento').val(),
        Nascimento: $('#Nascimento').val(),
        Inscrito: $('#Inscrito').val(),
        Estado: $('#Estado').val(),
        Cidade: $('#Cidade').val(),
        Senha: $('#Senha').val()
        }, function(res){
            //$('#cadastro').clear();
        });
    }else{
        alert('erro');
    }
}

function editaParticipante(){
    var cpf = $('#cpf');

    $cpfval = $cpf.split('.').join();
    $cpfval = $cpfval.split('-').join();

    if(valida_cpf($cpfval)){
        $.post('../controle/editaParticipante.php', 
        {Nome: $('#Nome'),
        CPF: $('#CPF'),
        RG: $('#RG'),
        ufRG: $('#ufRG'),
        Telefone: $('#Telefone'),
        Email: $('#Email'),
        Logradouro: $('#Logradouro'),
        Numero: $('#Numero'),
        Bairro: $('#Bairro'),
        CEP: cpf,
        Complemento: $('#Complemento'),
        Nascimento: $('#Nascimento'),
        Inscrito: $('#Inscrito'),
        Estado: $('#Estado'),
        Cidade: $('#Cidade'),
        Senha: $('#Senha')
        }, function($res){
            
        });
    }else{
        alert('erro');
    }
}

function fazLogin(){
    $.post('../controle/fazLogin.php', 
        {
        Email: $('#Emaillogin'),
        Senha: $('#Senhalogin')
        }, function($res){
            if($res == 1){
                //logado
                alert('logado');
            }else{
                alert(res);
            }
        }
    );
}

function retornaParticipante(){
    $.post('../controle/retornaParticipante',
    function(res){
        $('#dados').html(res);
    });
}