function cadastraParticipante(){
    var cpf = $('#cpf');

    $cpfval = $cpf.split('.').join();
    $cpfval = $cpfval.split('-').join();

    if(valida_cpf($cpfval)){
        $.post('../controle/cadastraParticipante.php', 
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
        Email: $('#Email'),
        Senha: $('#Senha')
        }, function($res){
            if($res == 1){
                //logado
            }else{
                alert('erro');
            }
        });
}

function retornaParticipante(){
    $.post('../controle/retornaParticipante',
    function(res){
        $('#dados').html(res);
    });
}