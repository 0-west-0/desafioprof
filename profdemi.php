<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$bairro_de_nascimento = $_POST['bairro_de_nascimento'];
$cidade_de_nascimento = $_POST['cidade_de_nascimento'];
$cpf = $_POST['cpf'];
$data_de_emissao_rg = $_POST['data_de_emissao_rg'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$altura = $_POST['altura'];
$cpf_Cliente = $_POST['cpf_Cliente'];
$estado_civil = $_POST['estado_civil'];
$nivel_de_escolaridade = $_POST['nivel_de_escolaridade'];
$nome_de_usuario = $_POST['nome_de_usuario'];
$peso = $_POST['peso'];
$profissao = $_POST['profissao'];
$senha = $_POST['senha'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$cpf_Cliente = $_POST['cpf_Cliente'];
$numero = $_POST['numero'];
$rua = $_POST['rua'];
$cpf_Cliente = $_POST['cpf_Cliente'];
$email = $_POST['email'];
$email_de_recuperacao = $_POST['email_de_recuperacao'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];

$result = mysqli_query($conexao, "INSERT INTO user(bairro_de_nascimento, cidade_de_nascimento,cpf,data_de_emissao_rg,data_de_nascimento,nome,RG) values('$bairro_de_nascimento','$cidade_de_nascimento','$cpf','$data_de_emissao_rg', '$data_de_nascimento','$nome','$RG')");
$result = mysqli_query($conexao, "INSERT INTO dados_user(altura, cpf_Cliente, estado_civil, nivel_de_escolaridade, nome_de_usuario, peso, profissao, senha) values('$altura','$cpf_Cliente','$estado_civil','$nivel_de_escolaridade', '$nome_de_usuario','$peso','$profissao','$senha')");
$result = mysqli_query($conexao, "INSERT INTO endereco(bairro, cep, cidade, complemento, cpf_Cliente, numero, rua) values('$bairro','$cep','$cidade','$complemento', '$cpf_Cliente','$numero','$rua')");
$result = mysqli_query($conexao, "INSERT INTO contato(cpf_Cliente, email, email_de_recuperacao, telefone1, telefone2) values('$cpf_Cliente','$email','$email_de_recuperacao','$telefone1', '$telefone2')");

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="pro demi css.css" rel= "stylesheet">
</head>

<body>
  <div class="container_form">
            <h1 class ="centralizar">Formulário de Cadastro</h1>
            <form class="form" action="#" method="post">
                
                <div class="form_grupo">
                    <label for="nome" class="form_label">Nome</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                </div>
				
			
				<div class="form_grupo">
                    <label for="telefone1" class="form_label">Telefone 1</label>
                    <input type="number" name="telefone1" class="form_input" id="telefone1" placeholder="seutelefone" required>
                </div>
				
				<div class="form_grupo">
                    <label for="telefone2" class="form_label">Telefone 2</label>
                    <input type="number" name="telefone2" class="form_input" id="telefone2" placeholder="seutelefone" required>
                </div>
				
				
				<div class="form_grupo">
                    <label for="e-mail" class="form_label">Email</label>
                    <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
                </div>
                
				<div class="form_grupo">
                    <label for="e-mail2" class="form_label">Email de recuperação</label>
                    <input type="email2" name="email" class="form_input" id="email2" placeholder="seuemail@email.com" required>
                </div>
                
		
			<div class="form_grupo">
                    <label for="cpf" class="form_label">Número de CPF</label>
                    <input type="cpf" name="number" class="form_input" id="cpf" placeholder="Seu cpf" required>
                </div>	
				
				
				<div class="form_grupo">
                    <label for="identidade" class="form_label">Número de ID</label>
                    <input type="identidade" name="number" class="form_input" id="identidade" placeholder="Seu Número de ID" required>
                </div>	
				
				
			<div class="form_grupo">
                    <label for="datarg" class="form_label">Data de emissão RG</label>
                    <input type="date" name="number" class="form_input" id="rg" placeholder="Data de Emissão" required>
                </div>		
				
				
				
				<div class="form_grupo">
                    <label for="datanascimento" class="form_label">Data de Nascimento</label>
                    <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
                </div>        
                
				
			
				
				
				<div class="form_grupo">
                    <label for="estadocivil" class="text">Estado civil</label>
                    <select name="estadocivil" class="dropdown" required>
                        
                        <option selected disabled class="form_select_option" value="">Selecione</option>
                        <option value="Solteiro" class="form_select_option">Solteiro(a)</option>
                        <option value="Casado" class="form_select_option">Casado(a) </option>
                        <option value="Divorciado" class="form_select_option">Divorciado(a)</option>                    
                        <option value="Viúvo" class="form_select_option">Viúvo(a)</option>                    
                    
                    </select>
                </div>
                
             
                
				<div class="form_grupo">
                    <label for="End" class="form_label">Endereço</label>
                    <input type="text" name="Endereço" class="form_input" id="end" placeholder="Endereço" required>
                </div>
				  
				<div class="form_grupo">
                    <label for="estado" class="form_label">Estado</label>
                    <input type="text" name="Estado" class="form_input" id="estado" placeholder="Estado" required>
                </div>
				
				<div class="form_grupo">
                    <label for="cidade" class="form_label">Cidade</label>
                    <input type="text" name="Cidade" class="form_input" id="cidade" placeholder="Cidade" required>
                </div>
				
				
				<div class="form_grupo">
                    <label for="CEP" class="form_label">CEP</label>
                    <input type="text" name="CEP" class="form_input" id="cep" placeholder="CEP" required>
                </div>
				
				<div class="form_grupo">
                    <label for="bairro" class="form_label">Bairro</label>
                    <input type="text" name="bairro" class="form_input" id="bairro" placeholder="Bairro" required>
                </div>
				
				
				<div class="form_grupo">
                    <label for="alt" class="form_label">Altura</label>
                    <input type="text" name="alt" class="form_input" id="alt" placeholder="altura" required>
                </div>
				
				<div class="form_grupo">
                    <label for="peso" class="form_label">Peso</label>
                    <input type="text" name="peso" class="form_input" id="peso" placeholder="Peso" required>
                </div>
				
				
				<div class="form_grupo">
                    <label for="prof" class="form_label">Profissão</label>
                    <input type="text" name="prof" class="form_input" id="prof" placeholder="Profissão" required>
                </div>
				
				
				
				
				<div class="form_grupo">
                    <span class="legenda">Sua Escolarídade</span>
				
                    <div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="fund" name="aprender" value="fund">
                        <label for="fund" class="form_label check_label"> <span class="check_new_btn"></span>Fundamental Completo</label>
					</div>
                    <div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="fundIn" name="aprender" value="fundIn">
                        <label for="fundIn" class="form_label check_label"><span class="check_new_btn"></span> Fudamental Incompleto</label>
                    </div>
                    <div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="medio" name="aprender" value="medio">
                        <label for="medio" class="form_label check_label"><span class="check_new_btn"></span> Médio Completo </label>
                    </div>
                    <div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="medioIn" name="aprender" value="medioIn">
                        <label for="medioIn" class="form_label check_label"><span class="check_new_btn"></span> Médio Incompleto</label>
                    </div>
                    
					<div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="sup" name="aprender" value="sup">
                        <label for="sup" class="form_label check_label"><span class="check_new_btn"></span> Superior Completo</label>
                    </div>
					
					<div class="check-btn">
                        <input type="checkbox" class="form_new_input" id="supIn" name="aprender" value="supIn">
                        <label for="supIn" class="form_label check_label"><span class="check_new_btn"></span> Superior Incompleto</label>
                    </div>
				</div>
                    
				
				<div class="form_grupo">
                    <label for="user" class="form_label">Seu usuário</label>
                    <input type="text" name="user" class="form_input" id="user" placeholder="usuário para login" required>
                </div>
				
				<div class="form_grupo">
                    <label for="senha" class="form_label">Senha</label>
                    <input type="password" name="senha" class="form_input" id="senha" placeholder="Sua senha" required>
                </div>
				
				
					
                    <div class="form_message">
                        
                        <label for="message" class="form_message_label"> Digite aqui sua sua mensagem:</label>
                        <textarea name="mensagem" id="message" cols="30" rows="3" class="form_input message_input" required></textarea>
                    </div>
                    <div class="submit">
                      <input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="submit_btn" >Cadastrar</button>
                    
                    </div>
            </form>
    </div><!--container_form-->	
	
	
	
	
</body>
</html>
