<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">            
</head>

<body>
<header>
@include('headeradm')
</header>

@csrf
@method('POST')

    <!-- Setor direciona ranking -->
<section>
    <div class="tabcontent">
        <img style="margin-right:310px;" class="img" src="/img/adminimg.png" alt="catiorro trabalhador">
        <p style="width:600px">Ola Administrador!</p>
        <p style="width:600px">Aqui geramos o acesso do nosso banco de produtos e moderamos as avaliações da nossa comunidade</p>
        <button style="height:80px" class="tablinkb" onclick="openPage('Ranking', this, 'white')">Veja todos os nossos produtos Cadastrados</button>
    </div>
</section>

    <section>
        <!--Coluna imagens produtos-->
        <div class="ranking">
            <h3>Cadastre Novos Produtos</h3>
            <div style="width:600px; margin-left:200px;">
            <form action="/criarUmProduto" method="POST">
                
                <label>Nome</label>
                    <input class="form-control" type="text" name="nome" value="" placeholder="Ração Seca PremieR Pet Golden Special Cães Adultos Frango e Carne">
                <label>Tipo de Produto </label>
                    <input class="form-control" type="text" name="tipo_produto" value="" placeholder="Ração"><br>

                <select name="categoria"class="form-control" style="width:200px; float:left;" >
                      <option selected disabled>Categoria</option>
                      <option value="standard">Standard</option>
                      <option value="premium ">Premium</option>
                      <option value="superpremium ">Super Premium</option>
                </select>

                <select name="idade" class="form-control" style="width:200px; float:right">
                      <option selected disabled>Idade</option>
                      <option value="standard">Adultos</option>
                      <option value="premium ">Filhote</option>
                      <option value="superpremium ">Idoso</option>
                    </select>

                    <select name="tipo_racao" class="form-control" style="width:200px; float:right">
                      <option selected disabled>Tipo Racao</option>
                      <option value="superpremium">Super Premium</option>
                      <option value="premium ">Premium</option>
                      <option value="premiumespecial">Premium Especial</option>
                      <option value="natural">Natural</option>
                      <option value="highpremium">High Premium</option>
                    </select><br> 
                <label>Marca</label>
                    <input class="form-control" type="text" name="marca" value="" placeholder="Premier">

                <label>Raça</label>
                    <input class="form-control" type="text" name="raca" value="" placeholder="Labrador">

                <label>Linha</label>
                    <input class="form-control" type="text" name="linha" value="" placeholder="Golden">                
                
                <label>Preço</label>
                    <input class="form-control" type="number" min="0.00" max="10000.00" name="preco" placeholder="109.90">
                
                <label>Peso</label>
                    <input class="form-control" type="text" name="peso" placeholder="15kl">
                
                <label>Sabor</label>
                    <input class="form-control" type="text" name="sabor" placeholder="Frango">

                <label>Coloração</label>
                    <input class="form-control" type="text" name="cor" placeholder="marrom"><br>

                    <select name="castrado" class="form-control" style="width:250px; float:left;">
                      <option selected disabled>Castrado</option>
                      <option value="simcastrado">Sim</option>
                      <option value="naocastrado ">Não</option>
                      <option value="n/a ">N/a</option>
                      </select>

                      <select name="corante" class="form-control" style="width:250px; float:left;">
                      <option selected disabled>Corante</option>
                      <option value="comcorante">Com Corante</option>
                      <option value="semcorante ">Sem Corante</option>
                      </select>

                      <select name="indicacao" class="form-control" style="width:250px; float:left;">
                      <option selected disabled>Indicação Veterinária</option>
                      <option value="alergico">Alérgico</option>
                      <option value="doencaintestinal ">Doenças Intestinais</option>
                      <option value="obesidade ">Obesidade</option>
                      <option value="renal ">Renal</option>
                      <option value="sobrepeso ">Soprepeso</option>
                      </select><br>

                      <select name="porte" class="form-control" style="width:250px; ">
                      <option selected disabled>Porte</option>
                      <option value="pequeno">Pequeno</option>
                      <option value="medio">Médio</option>
                      <option value="grande ">Grande</option>
                      <option value="mini">Mini</option>
                      <option value="gigante">Gigante</option>
                      </select><br>

                    <section class="md-form" style="float:left;  margin-left:50px;">
                        <div class="file-field">
                        <a class="btn-floating blue-gradient mt-0 float-right">
                        <i class="far fa-heart" aria-hidden="true"></i>
                        <input type="file">
                        </a>
                        <div class="file-path-wrapper">
                        </div>
                        </div>
                    </section>

                    <button type="submit" style="height:40px; width:200px; float:left;" class="tablinkb">Cadastrar</button> <br>
                </form>
                </div>
                    @if(isset($resultado))
                        @if($resultado)
                    <h1>Produto Cadastrado com Sucesso</h1>
                        @else
                    <h1>Erro em salvar o produto</h1>
                        @endif
                         @endif

    </div>

    </section>
        <br>
        <section>
            @include('footer')
        </section>

    </body>
  </html>
