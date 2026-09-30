<?php

require_once("modelo/Stayer.php");
require_once("modelo/Velocista.php");

echo "\033[H\033[J"; // esse foi o jeito masi eficiente que eu encontrei para limpar a tela //

echo
"┌──┐   ┌──┐┌────────────┐┌────────┐┌────────────┐┌──┐   ┌──┐┌─────────┐┌──┐   ┌──┐┌────────────┐┌────────┐
│ .│   │· ││ ·┌─┐  ┌─┐· ││ .┌──┐ ·││ ·┌─┐  ┌─┐· ││ .│   │· ││· ┌──────┘│ .│   │· ││ ·┌─┐  ┌─┐· ││· ┌─────┘
│· │   │  ││  │ │· │ │ ·││· └──┘  ││  │ │· │ │ ·││· │   │  ││ ·└──────┐│· │   │  ││  │ │· │ │ ·││  └──┐   
│──│   │──││──│ │──│ │──││──┌──┐──││──│ │──│ │──││──│   │──│└──────┐──││──│   │──││──│ │──│ │──││──┌──┘   
│══└───┘══││══│ │══│ │══││══│  │══││══│ │══│ │══││══└───┘══│┌──────┘══││══└───┘══││══│ │══│ │══││══└─────┐
└─────────┘└──┘ └──┘ └──┘└──┘  └──┘└──┘ └──┘ └──┘└─────────┘└─────────┘└─────────┘└──┘ └──┘ └──┘└────────┘

┌─────────┐┌─────────┐┌────────┐┌────────┐┌────────┐┌──┐  ┌──┐    ┌────────┐ ┌────────┐┌─────────┐┌────────┐ ┌──┐  ┌──┐
│  ┌───┐· ││  ┌───┐· ││· ┌─────┘└──┐· ┌──┘└──┐· ┌──┘│ .│  │ ·│    │ ·┌───┐·└┐│· ┌─────┘│  ┌───┐· ││ ·┌───┐·└┐│ .│  │ ·│
│· └───┘  ││· └───┘  ││  └──┐      │  │      │  │   │· └──┘  │    │. │   │  ││  └──┐   │· └───┘  ││. │┌──┘ ┌┘│· └──┘  │
│──┌──────┘│──┌─┐──┌─┘│──┌──┘      │──│      │──│   └─────┐──│    │──│   │──││──┌──┘   │──┌─┐──┌─┘│──│└──┐──│└─────┐──│
│══│       │══│ └┐═└─┐│══└─────┐   │══│      │══│   ┌─────┘══│    │══└───┘═┌┘│══└─────┐│══│ └┐═└─┐│══└───┘═┌┘┌─────┘══│
└──┘       └──┘  └───┘└────────┘   └──┘      └──┘   └────────┘    └────────┘ └────────┘└──┘  └───┘└────────┘ └────────┘";



$opcao = 0;
echo "\n1. Criar Umamusume e jogar\n";
echo "2. Ler as instruções (Recomendo!)\n";
echo "3. Sair\n";

$opcao = readline("Sua escolha: ");



    switch($opcao) {

    case 2:

        echo "\033[H\033[J";
        echo "\033[H\033[J";
        echo "\033[H\033[J";


        echo"========================================
BEM-VINDO AO UMAMUSUME!
=======================

Bem-vindo, Treinador!

Neste jogo, você será responsável por treinar
sua Umamusume e prepará-la para as corridas.

Durante sua jornada, você deverá escolher
cuidadosamente como utilizar cada dia.

---

```
         COMO JOGAR
```

---

TREINAMENTO

Os treinos permitem aumentar os atributos
da sua Umamusume:

* Speed
* Power
* Stamina

Cada tipo de treino possui um ganho principal
e pode conceder pontos bônus em outros status.

As Velocistas e as Stayers possuem diferentes
ganhos de atributos durante os treinamentos.

---

```
          CANSAÇO
```

---

Cada treino aumenta o cansaço da Umamusume.

Quanto mais cansada ela estiver, maior será
a chance de o próximo treino dar errado.

Por isso, não treine sem parar!

---

```
         TREINO FALHO
```

---

Se a Umamusume estiver muito cansada,
ela poderá falhar durante um treinamento.

Quando um treino falha:

* Os ganhos do treino não são recebidos.
* O humor da Umamusume diminui.

Quanto maior o cansaço, maior a chance
de um treinamento falhar.

---

```
          DESCANSAR
```

---

Descansar diminui o cansaço da Umamusume.

Use o descanso quando ela estiver muito cansada
para diminuir o risco de um treino falhar.

---

```
           HUMOR
```

---

O humor possui três níveis:

[ RUIM ]    [ NORMAL ]    [ BOM ]

Um treino que falhar pode piorar o humor.

Passear pode melhorar o humor da Umamusume.

O humor não influencia os treinamentos.
Ele será importante durante as corridas.

---

```
          PASSEAR
```

---

Passear é uma forma de melhorar o humor.

Normalmente, o humor aumenta em 1 ponto,
mas existe uma chance de um passeio ser
especial e aumentar o humor em 2 pontos!

---

```
           CORRIDAS
```

---

Depois de preparar sua Umamusume, chegou
a hora de colocá-la para correr!

Os atributos treinados durante sua preparação
serão importantes para o desempenho na corrida.

Escolha seus treinamentos com cuidado,
controle o cansaço e mantenha sua Umamusume
de bom humor.

---

Agora é com você, Treinador!

Prepare sua Umamusume.
Treine.
Descanse.
E esteja pronto para a próxima corrida!

```
    BOA SORTE, TREINADOR!
```

========================================



Leia as instruções acima!



========================================
";

    break;


    case 3:

        break;



    case 1:

        echo "\033[H\033[J";
        echo "\033[H\033[J";
        echo "\033[H\033[J";


        do {

    $nome = readline("\nEscolha o nome da sua Umamusume: \n");

    echo "\nQual o estilo de corrida da sua Umamusume?\n";
    echo "1. Velocista (corre corridas curtas, é focada em velocidade e power)\n";
    echo "2. Stayer (corre corridas longas, é focada em stamina e power)\n\n";

    $estilo = readline("Sua escolha: ");

    if ($estilo == 1) {

        $uma = new Velocista();

    } elseif ($estilo == 2) {

        $uma = new Stayer();

    } else {

        echo "Opção inválida, digite 1 ou 2\n\n";
        readline("- Pressione Enter para continuar -");

        echo "\033[H\033[J";
    }

} while ($estilo != 1 && $estilo != 2);

        $uma->setNome($nome);
        $uma->setEstilo($estilo);


        if($uma->getEstilo() == 1){

            echo "Vamos começar o treinamento de " . $uma->getNome() . ", a Velocista!\n\n";

            $uma->setSpeed(90);
            $uma->setStamina(80);
            $uma->setPower(90);

        } else {

            echo "Vamos começar o treinamento de " . $uma->getNome() . ", a Stayer!\n\n";

            $uma->setSpeed(80);
            $uma->setStamina(80);
            $uma->setPower(90);

        }

        readline("- Pressione Enter para continuar -");


        $energia = 100;
        $turnos = 35;
        $humor = "normal";


        function Treinar($uma, &$energia, &$humor, &$turnos){

            while(true){

                if ($turnos <= 0) {

                    echo "\033[H\033[J";

                    echo "========================================\n";
                    echo "       TREINAMENTO CONCLUÍDO!\n";
                    echo "========================================\n\n";

                    echo "Os 35 turnos de treinamento terminaram.\n";

                    readline("\nPressione Enter para continuar");

                    break;
                }


                echo "\033[H\033[J";

                echo "========================================\n";
                echo "            TREINAMENTO\n";
                echo "========================================\n\n";

                echo "Umamusume: " . $uma->getNome() . "\n";
                echo "Speed: " . $uma->getSpeed() . "\n";
                echo "Stamina: " . $uma->getStamina() . "\n";
                echo "Power: " . $uma->getPower() . "\n";

                echo "Classe: " . $uma->getEstilo() . "\n";
                echo "Energia: " . $energia . "/100\n";
                echo "Turnos restantes: " . $turnos . "/35\n";
                echo "Humor: " . $humor . "\n\n";


                echo "----------------------------------------\n";
                echo "            OPÇÕES DE TREINO\n";
                echo "----------------------------------------\n\n";


                echo "1. Treinar Speed\n";

                if ($energia > 0) {

                    echo "   Chance de sucesso: " . (50 + $energia * 0.5) . "%\n";

                } else {

                    echo "   INDISPONÍVEL — energia insuficiente\n";

                }

                echo "   Speed: +8 ~ +18 para Velocistas, +6 ~ +15 para Stayers.\n";
                echo "   Power: +2 ~ +7 para Velocistas, +3 ~ +10 para Stayers.\n\n";


                echo "2. Treinar Power\n";

                if ($energia > 0) {

                    echo "   Chance de sucesso: " . (50 + $energia * 0.5) . "%\n";

                } else {

                    echo "   INDISPONÍVEL — energia insuficiente\n";

                }

                echo "   Power: +8 ~ +15 para Velocistas, +6 ~ +12 para Stayers.\n";
                echo "   Speed: +2 ~ +5 para Velocistas, +3 ~ +6 para Stayers.\n\n";


                echo "3. Treinar Stamina\n";

                if ($energia > 0) {

                    echo "   Chance de sucesso: " . (50 + $energia * 0.5) . "%\n";

                } else {

                    echo "   INDISPONÍVEL — energia insuficiente\n";

                }

                echo "   Stamina: +6 ~ +12 para Velocistas, +8 ~ +16 para Stayers.\n";
                echo "   Power: +1 ~ +4 para Velocistas.\n";
                echo "   Speed: +3 ~ +7 para Stayers.\n\n";


                echo "4. Descansar\n";
                echo "   Recupera 30, 40 ou 50 de energia.\n\n";

                echo "5. Passear\n";
                echo "   Melhora o humor da Umamusume.\n\n";


                echo "----------------------------------------\n";

                $opcaoTreino = readline("Escolha uma opção: ");


                switch($opcaoTreino){


                    case 1:

                        if ($energia <= 0) {

                            echo "\nSua Umamusume está sem energia!\n";
                            echo "Ela precisa descansar antes de treinar.\n";

                            readline("\nPressione Enter para continuar");
                            echo "\033[H\033[J";

                            break;
                        }


                        $chance = 50 + ($energia * 0.5);

                        $sorteio = rand(1, 100);

                        echo "\nChance de sucesso: " . $chance . "%\n";


                        if ($sorteio <= $chance) {

                            echo "\nTreino de Speed realizado com sucesso!\n";


                            if ($uma instanceof Velocista) {

                                $uma->treinoSpeedVel();

                            } else if ($uma instanceof Stayer) {

                                $uma->treinoSpeedSta();

                            }


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                        } else {

                            echo "\nO treino falhou!\n";
                            echo "Sua Umamusume estava cansada demais.\n";


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                            if ($humor == "bom") {

                                $humor = "normal";

                            } else if ($humor == "normal") {

                                $humor = "ruim";

                            }

                            echo "O humor diminuiu para: " . $humor . "\n";
                        }


                        $turnos--;

                        readline("\nPressione Enter para continuar");
                        echo "\033[H\033[J";

                        break;


                    case 2:

                        if ($energia <= 0) {

                            echo "\nSua Umamusume está sem energia!\n";
                            echo "Ela precisa descansar antes de treinar.\n";

                            readline("\nPressione Enter para continuar");
                            echo "\033[H\033[J";

                            break;
                        }


                        $chance = 50 + ($energia * 0.5);

                        $sorteio = rand(1, 100);

                        echo "\nChance de sucesso: " . $chance . "%\n";


                        if ($sorteio <= $chance) {

                            echo "\nTreino de Power realizado com sucesso!\n";


                            if ($uma instanceof Velocista) {

                                $uma->treinoPowerVel();

                            } else if ($uma instanceof Stayer) {

                                $uma->treinoPowerSta();

                            }


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                        } else {

                            echo "\nO treino falhou!\n";


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                            if ($humor == "bom") {

                                $humor = "normal";

                            } else if ($humor == "normal") {

                                $humor = "ruim";

                            }

                            echo "O humor diminuiu para: " . $humor . "\n";
                        }


                        $turnos--;

                        readline("\nPressione Enter para continuar");
                        echo "\033[H\033[J";

                        break;


                    case 3:

                        if ($energia <= 0) {

                            echo "\nSua Umamusume está sem energia!\n";
                            echo "Ela precisa descansar antes de treinar.\n";

                            readline("\nPressione Enter para continuar");
                            echo "\033[H\033[J";

                            break;
                        }


                        $chance = 50 + ($energia * 0.5);

                        $sorteio = rand(1, 100);

                        echo "\nChance de sucesso: " . $chance . "%\n";


                        if ($sorteio <= $chance) {

                            echo "\nTreino de Stamina realizado com sucesso!\n";


                            if ($uma instanceof Velocista) {

                                $uma->treinoStaminaVel();

                            } else if ($uma instanceof Stayer) {

                                $uma->treinoStaminaSta();

                            }


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                        } else {

                            echo "\nO treino falhou!\n";


                            $energia -= 20;

                            if ($energia < 0) {
                                $energia = 0;
                            }


                            if ($humor == "bom") {

                                $humor = "normal";

                            } else if ($humor == "normal") {

                                $humor = "ruim";

                            }

                            echo "O humor diminuiu para: " . $humor . "\n";
                        }


                        $turnos--;

                        readline("\nPressione Enter para continuar");
                        echo "\033[H\033[J";

                        break;


                    case 4:

                        $sorteioEnergia = rand(1,3);

                        if($sorteioEnergia == 1){

                        $energia += 30;

                        if ($energia > 100) {

                            $energia = 100;

                        }

                    }
                    elseif($sorteioEnergia == 2){

                         $energia += 40;

                        if ($energia > 100) {

                            $energia = 100;

                        }
                    }
                    elseif($sorteioEnergia == 3){

                        $energia += 50;

                        if ($energia > 100) {

                            $energia = 100;

                        }
                    }

                        echo "\nSua Umamusume descansou!\n";
                        echo "Energia atual: " . $energia . "/100\n";
                        

                        readline("\nPressione Enter para continuar");
                        $turnos --;
                        echo "\033[H\033[J";

                        break;


                    case 5:

                        $sorteioPasseio = rand(1, 100);


                        if ($humor == "ruim") {

                            if ($sorteioPasseio <= 20) {

                                $humor = "bom";

                                echo "\nO passeio foi incrível!\n";
                                echo "O humor aumentou em 2\n";

                            } else {

                                $humor = "normal";

                                echo "\nO passeio foi agradável!\n";
                                echo "O humor aumentou em 1\n";
                            }


                        } else if ($humor == "normal") {

                            $humor = "bom";

                            echo "\nO passeio foi agradável!\n";
                            echo "O humor aumentou em 1\n";


                        } else {

                            echo "\nSua Umamusume já está de bom humor!\n";
                            echo "O passeio não pode aumentar mais o humor\n";
                        }


                        echo "Humor atual: " . $humor . "\n";

                        readline("\nPressione Enter para continuar");
                        $turnos --;
                        echo "\033[H\033[J";

                        break;


                    default:

                        echo "\nOpção inválida!\n";

                        readline("\nPressione Enter para continuar");
                        echo "\033[H\033[J";

                        break;
                }
            }
        }


        Treinar($uma, $energia, $humor, $turnos);

        $numCorridas = rand(1,2);



    function Corrida($uma, $humor, $numCorridas){

    echo "\033[H\033[J";

    echo "========================================\n";
    echo "              CORRIDA!\n";
    echo "========================================\n\n";


    echo "Escolha uma corrida:\n\n";

    if($numCorridas = 1){

    echo "1. G3 — New Zealand Trophy\n";
    echo "   Dificuldade: ★\n";
    echo "   Recompensa: Pequena\n\n";

    echo "2. G2 — Rose Stakes\n";
    echo "   Dificuldade: ★★\n";
    echo "   Recompensa: Média\n\n";

    echo "3. G1 — Arima Kinen\n";
    echo "   Dificuldade: ★★★\n";
    echo "   Recompensa: Grande\n\n";

    }
    elseif($numCorridas = 2){

    echo "1. G3 — Challenge Cup\n";
    echo "   Dificuldade: ★\n";
    echo "   Recompensa: Pequena\n\n";

    echo "2. G2 — American JCC\n";
    echo "   Dificuldade: ★★\n";
    echo "   Recompensa: Média\n\n";

    echo "3. G1 — Japanese Derby\n";
    echo "   Dificuldade: ★★★\n";
    echo "   Recompensa: Grande\n\n";


    }

    

    $opcaoCorrida = readline("Escolha uma opção: ");

    $speed = $uma->getSpeed();
    $power = $uma->getPower();
    $stamina = $uma->getStamina();

    if ($uma instanceof Velocista) {

        $pontuacao = ($speed * 0.5) + ($power * 0.3) + ($stamina * 0.2);

    } else if ($uma instanceof Stayer) {

        $pontuacao = ($stamina * 0.5) + ($power * 0.3) + ($speed * 0.2);

    }


    if ($humor == "bom") {

        $pontuacao += 10;

    } else if ($humor == "ruim") {

        $pontuacao -= 10;

    }


    switch($opcaoCorrida){

        case 1:

            $dificuldade = 60;
            $bonusMin = 5;
            $bonusMax = 10;

            break;


        case 2:

            $dificuldade = 80;
            $bonusMin = 10;
            $bonusMax = 18;

            break;


        case 3:

            $dificuldade = 100;
            $bonusMin = 18;
            $bonusMax = 30;

            break;


        default:

            echo "\nOpção inválida, escolha uma corrida válida\n";
            readline("Pressione Enter para continuar");

            return false;
    }


    $chance = 50 + (($pontuacao - $dificuldade) * 1.5);


    if ($chance < 10) {
        $chance = 10;
    }

    if ($chance > 90) {
        $chance = 90;
    }


    echo "\n========================================\n";
    echo "             RESULTADO\n";
    echo "========================================\n\n";

    echo "Speed: " . $speed . "\n";
    echo "Power: " . $power . "\n";
    echo "Stamina: " . $stamina . "\n";
    echo "Humor: " . $humor . "\n\n";

    echo "Pontuação de corrida: " . round($pontuacao) . "\n";
    echo "Chance de vitória: " . round($chance) . "%\n\n";


    $sorteio = rand(1, 100);


    if ($sorteio <= $chance) {

        echo $uma->getNome() . " venceu a corrida!\n\n";

        echo "Bônus recebido:\n";

        $bonusSpeed = rand($bonusMin, $bonusMax);
        $bonusPower = rand($bonusMin, $bonusMax);
        $bonusStamina = rand($bonusMin, $bonusMax);

        $uma->setSpeed($speed + $bonusSpeed);
        $uma->setPower($power + $bonusPower);
        $uma->setStamina($stamina + $bonusStamina);

        echo "Speed: +" . $bonusSpeed . "\n";
        echo "Power: +" . $bonusPower . "\n";
        echo "Stamina: +" . $bonusStamina . "\n";

    } else {

        echo "A corrida terminou...\n";
        echo $uma->getNome() . " perdeu a corrida.\n\n";

        echo "Nenhum bônus foi recebido.\n";
    }


    readline("\nPressione Enter para continuar");
    return true;
}

       

    function CarreiraCompletada($uma){

    echo "\n========================================\n";
    echo "        CARREIRA COMPLETADA!\n";
    echo "========================================\n\n";

    echo "Umamusume: " . $uma->getNome() . "\n\n";

    echo "Speed: " . $uma->getSpeed() . "\n";
    echo "Power: " . $uma->getPower() . "\n";
    echo "Stamina: " . $uma->getStamina() . "\n\n";

    $media = ($uma->getSpeed() + $uma->getPower() + $uma->getStamina()) / 3;

    echo "Média dos atributos: " . round($media, 1) . "\n";

    if ($media >= 100) {
        echo "Ranking: S\n";
    } else if ($media >= 80) {
        echo "Ranking: A\n";
    } else if ($media >= 60) {
        echo "Ranking: B\n";
    } else {
        echo "Ranking: C\n";
    }

    echo "\n========================================\n";

    readline("Pressione Enter para continuar");
    
}
        $resultado = Corrida($uma, $humor, $numCorridas);

            if($resultado == true){
                CarreiraCompletada($uma);
            }
            else{
                Corrida($uma, $humor, $numCorridas);
            } 
}

