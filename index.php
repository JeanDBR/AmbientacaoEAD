<?php
include '../../../../config.php';

//verifica se o usuário está logado
require_login();

//verifica se o usuário é adm
$admins = get_admins();
$isadmin = false;
foreach ($admins as $admin) {
    if ($USER->id == $admin->id || user_has_role_assignment($USER->id, 3)) {
        $isadmin = true;
        break;
    }
}

if (empty($_GET['curso'])) {
    header('Location: https://moodle.toledoprudente.edu.br/');
} else {
    $curso = isset($_GET['curso']) ? $_GET['curso'] : header('Location: https://moodle.toledoprudente.edu.br/');

    $context = get_context_instance(CONTEXT_COURSE, $curso);
    if (!is_enrolled($context, $USER->id) && !user_has_role_assignment($USER->id, 1)) {
        header('Location: https://moodle.toledoprudente.edu.br/');
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Web Aula Ambientação">
    <meta name="author" content="Jean de Deus Brandão">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/css/style.css" rel="stylesheet" />
    <link href="css/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ambientação - EAD Toledo Prudente Centro Universitário</title>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</head>

<body>
    <img src="img/tela01/img_1.png" class="curvalaranja" />
    <section id="secao123" class="sectionprincipal">
        <section id="secao1" class="section fundo">
            <img src="img/tela01/img_2.png" class="imgnotebook" />
            <div class="row col-12 fundo">
                <div class="detalhelaranja">
                    <img src="img/tela01/bolinhas_1.png" />
                </div>
                <div class="col-11 offset-1 p-0">
                    <div class="campoLogo">
                        <img src="img/tela01/logo.png" class="logoToledo" />
                        <img src="img/tela01/bolinhas_2.png" class="bolinhas" />
                    </div>
                    <div class="col-12 p-0 conteudo">
                        <figure class="barralaranja"></figure>
                        <p class="textobarralaranja">
                            Graduação EAD Toledo Prudente
                        </p>

                        <div class="col-6 p-0" style="z-index: 99999;">
                            <div class="col-12 p-0">
                                <p class="titulo">
                                    Aprendendo a estudar na EAD
                                </p>
                            </div>
                            <div class="col-12 p-0">
                                <p class="subtitulo">
                                    15 dicas para você ter sucesso no curso
                                </p>
                            </div>
                        </div>
                        <div class="col-12 p-0 areamouse">
                            <a id="mouse" href="#secao2">role a página
                                <div class="mouse">
                                    <div class="scroller">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="secao2" class="section fundo">
            <div class="row col-12 fundo">
                <div class="col-6">
                    <img src="img/tela02/img_3.png" class="imagemaluno" />
                </div>
                <div class="col-6 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 01
                    </p>

                    <p class="titulo">
                        Lembre-se que você está cursando uma graduação
                    </p>

                    <div class="texto">
                        Assim como em um curso presencial, é preciso reservar tempo para os estudos e dedicar-se.
                        Sugerimos que você reserve de 3 a 4 horas para estudar em 5 dias da semana. Tenha clareza de que
                        fazer uma graduação na modalidade EAD não é mais fácil do que no ensino presencial, embora tenha
                        vantagens, como a flexibilidade e a liberdade de estudar nos melhores horários para você e do
                        lugar onde você estiver.
                    </div>
                    <div class="text-right">
                        <img src="img/tela02/bolinhas_3.png" class="bolinhas" />
                    </div>
                </div>
            </div>
        </section>

        <section id="secao3" class="section">
            <div class="row col-12 fundo">
                <div class="col-6 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 02
                    </p>

                    <p class="titulo">
                        Cuidado com a flexibilidade da EAD
                    </p>

                    <div class="texto">
                        Na EAD você tem mais liberdade para decidir onde e em que momentos do seu dia estudar, podendo
                        conciliar melhor a sua graduação com outros compromissos. Isso é muito bom, mas pode ser um
                        problema se você não se organizar e tiver disciplina para seguir uma rotina de estudos.
                    </div>
                </div>
            </div>
            <div class="row col-12 fundo">
                <div class="col-6 alerta">
                    <img src="img/tela03/alerta.png" />
                    <span class="textoAlerta">Veja os exemplos ao lado</span>
                </div>
                <div class="row col-6 alertaControle">
                    <div class="row col-4">
                        <div class="col-6">
                            <button class="controlecarrossel" id="antCarrossel" disabled>
                                <img src="img/tela03/seta_1.png" style="width: 13px; margin-right: 15%;" />
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="controlecarrossel" id="proxCarrossel">
                                <img src="img/tela03/seta_2.png" style="width: 13px;" />
                            </button>
                        </div>
                    </div>
                    <div class="col-8">
                        <span class="textocarrossel">Utilize os botões de navegação ao lado para conhecer cada
                            exemplo</span>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div class="carrossel text-right">
        <div class="carrosselitem">
            <img class="carrosselimagem" id="carrosselimagem" />
        </div>
    </div>

    <section id="secao4" class="sectionprincipal">
        <img src="img/tela04/img_4.png" class="imagemlaranja" />
        <div class="text-right">
            <img src="img/tela04/bolinhas_4.png" class="bolinhas" />
        </div>
        <div class="row col-12 fundo">
            <div class="col-6 conteudo">
                <figure class="barrabranca"></figure>
                <p class="textobarralaranja">
                    Dica 03
                </p>

                <p class="titulo">
                    Defina prioridades
                </p>

                <div class="texto">
                    Além dos inúmeros afazeres que temos no nosso cotidiano, frequentemente surgem outros compromissos e
                    imprevistos, não é mesmo? Também aparecem convites relacionados ao lazer e o cansaço chega. Para
                    alcançar seus objetivos é fundamental constantemente estabelecer prioridades. Questione-se: o que é
                    mais urgente? o que tem prazo? o que me permite chegar onde eu quero?. Mantenha uma lista do que
                    você tem para fazer na ordem de importância/urgência.
                </div>
            </div>
            <ul class="col-6 icones">
                <li class="primeiro">
                    <div class="col-2">
                        <img class="itemicone" id="icone1" src="img/tela04/1.png">
                    </div>
                    <div class="col-10">
                        <div class="texto" id="textoicone1">
                            <div class="arrow-left"></div>
                            Trabalhar
                        </div>
                    </div>
                </li>
                <li class="segundo">
                    <div class="col-2">
                        <img class="itemicone" id="icone2" src="img/tela04/2.png">
                    </div>
                    <div class="col-10">
                        <div class="texto" id="textoicone2">
                            <div class="arrow-left"></div>
                            Realizar atividades do meu curso EAD
                        </div>
                    </div>
                </li>
                <li class="terceiro">
                    <div class="col-2">
                        <img class="itemicone" id="icone3" src="img/tela04/3.png">
                    </div>
                    <div class="col-10">
                        <div class="texto" id="textoicone3">
                            <div class="arrow-left"></div>
                            Lazer
                        </div>
                    </div>
                </li>
                <li class="quarto">
                    <div class="col-2">
                        <img class="itemicone" id="icone4" src="img/tela04/4.png">
                    </div>
                    <div class="col-10">
                        <div class="texto" id="textoicone4">
                            <div class="arrow-left"></div>
                            Ir à academia/fazer atividades físicas
                        </div>
                    </div>
                </li>
                <li class="quinto">
                    <div class="col-2">
                        <img class="itemicone" id="icone5" src="img/tela04/5.png">
                    </div>
                    <div class="col-10">
                        <div class="texto" id="textoicone5">
                            <div class="arrow-left"></div>
                            Assistir séries/novela
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <section id="secao56" class="sectionprincipal">
        <section id="secao5" class="section fundo">
            <img src="img/tela05/img_5.png" class="imagemaluno img-fluid" />
            <div class="row col-12 fundo">
                <div class="col-6 offset-6 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 04
                    </p>

                    <p class="titulo">
                        Organize-se
                    </p>

                    <div class="texto">
                        Estabeleça horários para cada atividade que você precisa cumprir no seu dia e metas diárias e
                        semanais. Faça uma lista das atividades a realizar em ordem de prioridade. Não se esqueça de
                        prever, também, momentos de descanso e de diversão. Respeite os horários definidos e não acumule
                        atividades de uma semana para a outra. É mais saudável iniciar a semana sem a pressão de tarefas
                        acumuladas, além de aumentar suas chances de sucesso.
                    </div>
                </div>
            </div>
        </section>
        <section id="secao6" class="section fundo">
            <img src="img/tela06/img_teste.png" class="imagemaluno img-fluid" />
            <a class="pontos negativo" id="sofa" order="0">
            </a>
            <div>
                <div class="arrow-left tiposofa"></div>
                <div class="texto textoleft tiposofa">
                    Negativo
                    <div class="textoBlack">
                        Sofá
                    </div>
                </div>
            </div>
            <a class="pontos negativo" id="notebook" order="1"></a>
            <div>
                <div class="arrow-left tiponotebook"></div>
                <div class="texto textoleft tiponotebook">
                    Negativo
                    <div class="textoBlack">
                        Sem mesa para apoio
                    </div>
                </div>
            </div>
            <a class="pontos negativo" id="perna" order="2"></a>
            <div>
                <div class="arrow-left tipoperna"></div>
                <div class="texto textoleft tipoperna">
                    Negativo
                    <div class="textoBlack">
                        Sem espaço para apoiar caderno
                    </div>
                </div>
            </div>
            <a class="pontos negativo" id="chao" order="3"></a>
            <div>
                <div class="arrow-left tipochao"></div>
                <div class="texto textoleft tipochao">
                    Negativo
                    <div class="textoBlack">
                        Pouca luminosidade
                    </div>
                </div>
            </div>
            <a class="pontos negativo" id="porta" order="4"></a>
            <div>
                <div class="arrow-left tipoporta"></div>
                <div class="texto textoleft tipoporta">
                    Negativo
                    <div class="textoBlack">
                        Distrações
                    </div>
                </div>
            </div>
            <a class="pontos" id="bloconotas" order="5"></a>
            <div>
                <div class="arrow-right tipobloconotas"></div>
                <div class="texto textoright tipobloconotas">
                    Positivo
                    <div class="textoBlack">
                        Anotações
                    </div>
                </div>
            </div>
            <a class="pontos" id="mesa" order="6"></a>
            <div>
                <div class="arrow-right tipomesa"></div>
                <div class="texto textoright tipomesa">
                    Positivo
                    <div class="textoBlack">
                        Mesa
                    </div>
                </div>
            </div>
            <a class="pontos" id="garrafa" order="7"></a>
            <div>
                <div class="arrow-right tipogarrafa"></div>
                <div class="texto textoright tipogarrafa">
                    Positivo
                    <div class="textoBlack">
                        Garrafa de água
                    </div>
                </div>
            </div>
            <a class="pontos" id="parede" order="8"></a>
            <div>
                <div class="arrow-right tipoparede"></div>
                <div class="texto textoright tipoparede">
                    Positivo
                    <div class="textoBlack">
                        Pouco barulho
                    </div>
                </div>
            </div>
            <a class="pontos" id="oculos" order="9"></a>
            <div>
                <div class="arrow-right tipooculos"></div>
                <div class="texto textoright tipooculos">
                    Positivo
                    <div class="textoBlack">
                        Sem distrações
                    </div>
                </div>
            </div>
            <a class="pontos" id="janela" order="10"></a>
            <div>
                <div class="arrow-right tipojanela"></div>
                <div class="texto textoright tipojanela">
                    Positivo
                    <div class="textoBlack">
                        Luminosidade
                    </div>
                </div>
            </div>
            <div class="row col-12 fundo">
                <div class="col-6 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 05
                    </p>

                    <p class="titulo">
                        Estabeleça o seu local de estudos
                    </p>

                    <div class="texto">
                        Na EAD você pode estudar em qualquer lugar e até mesmo aproveitar o período que está no ônibus
                        para isso, por exemplo. Mas na sua casa é muito importante que você defina o seu lugar de
                        estudos: escolha um local com boa luminosidade, pouco barulho e sem distrações. Também é legal
                        ter uma mesa, para que você tenha como abrir o seu caderno, realizar anotações e deixar uma
                        garrafa de água por perto. Esse espaço precisa ser confortável, mas não tanto como um sofá,
                        porque senão seus estudos não rendem! Cuide da sua postura e estude em um espaço que favoreça a
                        sua concentração e produtividade. O quarto é o local menos indicado.
                    </div>
                </div>
            </div>
            <img src="img/tela06/bolinhas_5.png" class="bolinhas" />
        </section>
    </section>

    <section id="secao789" class="sectionprincipal">

        <img src="img/tela07/img_8.png" class="imagemlaranja img-fluid" />
        <section id="secao7" class="section fundo">
            <img src="img/tela07/img_9.png" class="imagemaluno img-fluid" />
            <div class="row col-12 fundo">
                <div class="col-8 offset-4 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 06
                    </p>

                    <p class="titulo">
                        Tenha foco! Cuidado com as distrações
                    </p>

                    <div class="texto">
                        Tão importante como você ter o seu local de estudos, é afastar o que pode te distrair. Não deixe
                        a televisão ligada por perto e, se possível, mantenha o celular no silencioso (estabeleça
                        períodos para verificar se chegou alguma notificação importante, como a cada uma hora, por
                        exemplo, e responda apenas o que for urgente). Você já parou para pensar quanto tempo por dia
                        você gasta em redes sociais e em aplicativos de mensagens? Que tal aproveitar para rever os
                        grupos que você faz parte, sair de alguns e silenciar os que você fizer questão de permanecer?
                        Também defina momentos do seu dia para acessar as redes sociais, não fique refém delas!
                    </div>
                </div>
            </div>
        </section>
        <section id="secao8" class="section fundo">
            <img src="img/tela08/img_10.png" class="imagemaluno img-fluid" />
            <div class="row col-12 fundo">
                <div class="col-5 offset-7 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 07
                    </p>

                    <p class="titulo">
                        Defina metas a curto, médio e longo prazo
                    </p>

                    <div class="texto">
                        Ao ingressar em um curso de graduação, imagino que sua meta seja obter um diploma de curso
                        superior, conquistar um bom espaço no mercado de trabalho e até mesmo aumentar sua renda, certo?
                        Concluir o curso é uma meta a longo prazo: você levará alguns semestres até alcançá-la. Para
                        você se manter motivado, defina metas a curto e a médio prazo, possíveis de serem atingidas,
                        como aprender um tema novo, realizar as atividades desta semana e ser aprovado na disciplina
                        atual.
                    </div>
                </div>
            </div>
        </section>
        <section id="secao9" class="section fundo">
            <img src="img/tela09/img_11.png" class="imagemaluno img-fluid" />
            <div class="row col-12 fundo">
                <div class="col-8 offset-4 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 08
                    </p>

                    <p class="titulo">
                        Tire todas as suas dúvidas
                    </p>

                    <div class="texto">
                        Ao estudar é natural que surjam dúvidas, inquietações, ou mesmo reflexões que você queira
                        compartilhar com alguém. Não deixe isso se acumular, porque irá atrapalhar você ao prosseguir os
                        estudos. Entre em contato com o seu tutor, aproveite essa oportunidade de ter alguém sempre por
                        perto. Ele com certeza estará à disposição para te ajudar! Se você entrar em contato online,
                        aguardará, no máximo, 24h úteis para ter retorno do seu contato. Se você preferir, pode vir a
                        Toledo Prudente, nos horários divulgados, para conversar pessoalmente com o seu tutor. Utilize
                        também a biblioteca física (na Toledo Prudente) e/ou digital para pesquisar e saber mais sobre
                        os temas que estiver estudando.
                    </div>
                </div>
            </div>
        </section>

    </section>

    <section id="secao10" class="sectionprincipal">
        <img src="img/tela10/img_12.png" class="imagemaluno img-fluid" />
        <div class="row col-12 fundo">
            <div class="col-6 conteudo">
                <figure class="barralaranja"></figure>
                <p class="textobarralaranja">
                    Dica 09
                </p>

                <p class="titulo">
                    Interaja! Você não <br />precisa aprender sozinho
                </p>

                <div class="texto">
                    Comunicar-se, questionar, compartilhar informações e reflexões contribui para a sua aprendizagem. Na
                    EAD isso também é possível. Utilize os canais de comunicação oferecidos pelo curso para conversar
                    com o seu tutor e colegas de turma. Você também pode se juntar com outros alunos para formar um
                    grupo de estudos presencial ou online. Manter-se conectado com outras pessoas do curso ajudará você
                    nessa jornada!
                </div>
            </div>
        </div>
    </section>

    <section id="secao1112" class="sectionprincipal">

        <section id="secao11" class="section fundo">
            <img src="img/tela11/img_substituta.png" class="imagem" />
            <div class="row col-12 fundo">
                <div class="col-6 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 10
                    </p>

                    <p class="titulo">
                        Cumpra prazos
                    </p>

                    <div class="texto">
                        Todas as atividades que você irá realizar no curso tem prazo. Ou seja, você tem flexibilidade
                        para realizá-las no local e horário que for melhor para você, mas é necessário se organizar para
                        conclui-las e enviá-las dentro do prazo informado no ambiente do curso. Após o prazo o sistema
                        não permite mais enviar a atividade e, com isso, você perde a nota dessa tarefa.
                    </div>
                </div>
            </div>
        </section>

        <section id="secao12" class="section fundo">
            <img src="img/tela12/img_13.png" class="imagem img-fluid" />
            <div class="row col-12 fundo">
                <div class="col-9 offset-3 conteudo">
                    <figure class="barralaranja"></figure>
                    <p class="textobarralaranja">
                        Dica 11
                    </p>

                    <p class="titulo">
                        Não deixe para realizar as atividades na última hora
                    </p>

                    <div class="texto">
                        As disciplinas são sequenciais, ofertadas em períodos determinados e as atividades têm prazo
                        para serem realizadas. Então, organize-se para realizá-las com antecedência, calma e tempo hábil
                        para solucionar todas as dúvidas que tiver. Sempre que realizamos algo em cima da hora, com o
                        tempo correndo contra nós e a pressão de não dar tempo, aumentamos a chance de cometer erros, a
                        qualidade do que fazemos cai e isso pode gerar estresse e ansiedade. Ao realizar as atividades
                        com antecedência, você também evita perder prazos por problemas de conexão à internet, falta de
                        energia elétrica, problemas de saúde ou outros imprevistos.
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="secao13" class="sectionprincipal">
        <img src="img/tela13/img_14.png" class="imagemaluno img-fluid" />
        <div class="row col-12 fundo">
            <div class="col-7 conteudo">
                <figure class="barrabranca"></figure>
                <p class="textobarralaranja">
                    Dica 12
                </p>

                <p class="titulo">
                    Não pule etapas nos <br />seus estudos
                </p>

                <div class="texto">
                    Observe que cada disciplina está organizada em trilhas: são três caminhos sequenciais que você
                    precisa seguir para conclui-la. Cada trilha inicia com um podcast, que é um áudio do professor
                    apresentando o caminho que você tem pela frente, depois você tem os materiais de estudo (cada
                    material de estudos possui textos, vídeos e infográficos) e termina com uma atividade online.
                    Organize-se para cumprir uma trilha por semana e siga a sequência proposta. Você até pode acessar os
                    materiais e atividades fora da sequência para ter uma visão do todo, conhecer o que vem pela frente
                    ou mesmo por curiosidade, mas é recomendável que você estude todos os itens de cada trilha e na
                    sequência, porque um material pode ser pré-requisito para você compreender o outro. Além disso, os
                    materiais da trilha permitem a você ter a base necessária para realizar a atividade proposta. Não
                    realize a atividade sem ter estudado o conteúdo da respectiva trilha!
                </div>
            </div>
        </div>
    </section>

    <section id="secao14" class="sectionprincipal" style="background-color: #333; margin-bottom: -1px;">
        <img src="img/tela14/img_15.png" class="imagemaluno img-fluid" />
        <div class="row col-12 fundo">
            <div class="col-7 p-0">
                <div class="row col-12" style="display: block; top: 60%; left: 25%;">
                    <img src="img/tela14/bolinhas_6.png" class="bolinhas img-fluid" />
                </div>
            </div>
            <div class="col-5 conteudo">
                <figure class="barralaranja"></figure>
                <p class="textobarralaranja">
                    Dica 13
                </p>

                <p class="titulo">
                    Estude diariamente
                </p>

                <div class="texto">
                    Já falamos sobre definição de prioridades, organização, cumprir prazos e não realizar atividades de
                    última hora. Sobre isso, há mais um ponto crucial: não concentre toda a carga horária de estudos da
                    semana em um único dia ou apenas nos finais de semana! Para aprender, é necessário tempo, contato
                    frequente com os estudos e rotina. Assim como em um curso presencial, o ideal é que você reserve um
                    período todos os dias para estudar, de segunda a sexta, por exemplo. Caso você não tenha tempo
                    disponível em algum(ns) dia(s) da semana, reserve um espaço no fim de semana para suprir isso.
                    Lembra-se das metas a curto prazo? Então! Estabeleça a meta de realizar uma trilha por semana.
                    Estudando diariamente, você não se sentirá esgotado e conseguirá acompanhar o curso com sucesso.
                </div>
            </div>
        </div>
    </section>
    <img src="img/tela15/fundo_13.jpg" class="fundosecao15" />
    <section id="secao15" class="sectionprincipal">
        <div class="row col-12 fundo">
            <div class="col-6 conteudo">
                <figure class="barrabranca"></figure>
                <p class="textobarralaranja">
                    Dica 14
                </p>

                <p class="titulo">
                    Descanse e divirta-se
                </p>

                <div class="texto">
                    O curso de graduação EAD precisa fazer parte da sua rotina e você precisa se organizar de
                    maneira
                    que também seja possível descansar e ter momentos de lazer. Planejando horário para cada uma das
                    suas tarefas e compromissos diários, e também, afastando-se das distrações, você terá o
                    necessário
                    tempo para recarregar suas energias e manter-se animado com os estudos.
                </div>
            </div>
        </div>
    </section>
    <section id="secao16" class="sectionprincipal" style="background-color: #2f2e2d;">
        <img src="img/tela16/img_16.png" class="imagemaluno" />
        <div class="row col-12 fundo">
            <div class="col-5 offset-7 conteudo">
                <figure class="barralaranja"></figure>
                <p class="textobarralaranja">
                    Dica 15
                </p>

                <p class="titulo">
                    Sinta-se motivado!
                </p>

                <div class="texto">
                    Qual foi o motivo para você ingressar no curso de graduação EAD? No decorrer dos semestres, pode
                    ser
                    que você desanime por imprevistos que surgem no caminho ou mesmo com o cansaço diante da vida
                    corrida que temos. Porém, nunca perca de vista o que te motivou a realizar este curso! Tenha
                    foco,
                    determinação e batalhe para chegar onde você sonha. Conte com a Toledo Prudente para isso: você
                    tem
                    o apoio do seu tutor, coordenador de curso, psicopedagoga, Toledo Carreiras e toda nossa
                    infraestrutura e colaboradores.
                </div>
            </div>
        </div>
    </section>

    <footer id="rodape" class="sectionprincipal">
        <div class="row col-12 p-0 m-0 fundo">
            <div class="arealogo col-5">
                <img src="img/rodape/logo_branco_principal_toledoGO.png" class="logo" />
            </div>
            <div class="inforodape row p-0 col-7">
                <div class="col-12 direitos">
                    <div class="col-12 p-0">
                        <b>&copy; Toledo Prudente Centro Universitário</b>
                    </div>
                    <div class="col-12 p-0">
                        Copyright 1961-2020 - todos os direitos reservados
                    </div>

                </div>
                <!-- <div class="col-5">
                    <a data-toggle="modal" href="#" id="btnVerCreditos" data-target="#modalCreditos"><b>Créditos</b></a>
                </div> -->
            </div>
        </div>
    </footer>

    <div class="modal" tabindex="-1" role="dialog" id="modalCreditos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="creditos row col-12 p-0 m-0">
                    <div class="container">
                        <div class="row col-12 p-0 m-0 arealogo">
                            <div class="col-11 p-0 m-0">
                                <img src="img/rodape/logo_branco_principal_toledoGO.png" class="logo" />
                            </div>
                            <div class="btnFechar col-1 text-center">
                                <a id="btnFecharModal" data-dismiss="modal" aria-label="Close" href="#">X</a>
                            </div>
                        </div>
                        <div class="row col-12 p-0 m-0 conteudo">
                            <div class="row col-6 p-0 m-0 equipe">
                                <div class="row col-12 p-0 m-0">
                                    <b>Coordenação do NEAD</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Eli Candido Junior
                                </div>
                                <br /><br />
                                <div class="row col-12 p-0 m-0">
                                    <b>Elaboração</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Paula Mesquita Melques
                                </div>
                                <br /><br />
                                <div class="row col-12 p-0 m-0">
                                    <b>Acessoria Pedagógica</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Paula Mesquita Melques
                                </div>
                            </div>
                            <div class="row col-6 p-0 m-0 equipe">
                                <div class="row col-12 p-0 m-0">
                                    <b>Produção e Edição de vídeos</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Matheus Yugi Higa Nampo
                                    <br />
                                    Gustavo Miranda Zanluchi
                                </div>
                                <br /><br /><br />
                                <div class="row col-12 p-0 m-0">
                                    <b>Programação</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Jean de Deus Brandão
                                </div>
                                <br /><br />
                                <div class="row col-12 p-0 m-0">
                                    <b>Design Gráfico</b>
                                </div>
                                <div class="row col-12 p-0 m-0">
                                    Jackeline de Oliveira
                                </div>
                            </div>

                            <div class="row col-12 p-0 m-0 info">
                                *Todos os gráficos, tabelas e esquemas são creditados à autoria, salvo quando indicada a
                                referência.
                                <br /><br />
                                Informamos que é de inteira responsabilidade da autoria a emissão de conceitos.
                                Nenhuma parte desta publicação poderá ser reproduzida por qualquer meio ou forma sem
                                autorização.
                                A violação dos direitos autorais é crime estabelecido pela Lei n.º 9.610/98 e punido
                                pelo artigo 184
                                do
                                Código Penal.
                                <br /><br />
                                Imagens, ícones e capas: ©shutterstock e ©flaticon
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>