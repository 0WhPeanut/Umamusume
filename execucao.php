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

Um treino bem-sucedido pode melhorar o humor.

Um treino que falhar pode piorar o humor.

O humor também influencia o rendimento
dos treinamentos.

Uma Umamusume de bom humor pode conseguir
melhores resultados nos treinos, enquanto uma
Umamusume de mau humor pode ter um rendimento
menor.

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
Passeie.
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

    $uma = new Umamusume();

        $uma-> setNome(readline("\nEscolha o nome da sua Umamusume: \n"));
        echo"\nQual o estilo de corrida da sua Umamusume?\n1. Velocista (corre corridas curtas, é focada em velocidade e power)\n2. Stayer (corre corridas longas, é focada em stamina e power)\n\n";

        $uma-> setEstilo(readline("Sua escolha: "));

            if($uma->getEstilo() == 1){

                echo"Vamos começar o treinamento de " . $uma->getNome() . ", a Velocista!\n\n";

            }else{

                echo"Vamos começar o treinamento de " . $uma->getNome() . ", a Stayer!\n\n";

            }

        readline("- Pressione Enter para continuar -");

            echo "\033[H\033[J";
  

                echo"========================================\n";
                echo"            TREINO BÁSICO\n";
                echo"========================================\n";

                echo" 1. Treinar Speed\n";
                echo" 2. Treinar Power\n";
                echo" 3. Treinar Stamina\n";
    }