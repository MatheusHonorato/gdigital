# gdigital
Repositório dedicado a teste para programador PHP na Gdigital

## Descrição do projeto

O Front deverá ser feito sem utilizar PHP, realizando todas as ações por Ajax, sendo que a API deverá ser construída utilizando o Framework "Lumen".
- O sistema deverá possuir 2 telas:
  - Tela no formato "Landing page" onde exista um formulário para uma pessoa se cadastrar. O mesmo pode se cadastrar informando nome, e-mail e telefone sendo que é obrigatório que le preencha o email OU o telefone.  
  - Tela onde liste as pessoas cadastradas e de a opção para quando um usuário clicar em um cadastro mostrar mais informações sobre o mesmo como, data em que se cadastrou, e a possibilidade de adicionar anotações referente a este cadastro.

## Pontos essenciais

- Utilizar o MySQL na versão inferior a 8, de preferência 5.7 e PHP na versão 7.4 para maior compatibilidade com o ambiente em que o mesmo será testado.
- Lembrar de enviar a URL assim que começar o projeto assim poderemos ver de perto seu progresso.
API ser construida utilizando o Framework Lumen
- Estrutura do banco de dados ser construída através de migrations.

## Pontos desejáveis
- Utilizar a biblioteca Axios para realizar as requisições a API
- Utilizar Bootstrap 4 + Font-awesome 5 no front
- Utilizar o mínimo possível de jQuery, quanto mais vanilla o código melhor (exceção para a lib axios)
- Utilizar os padrões do bootstrap para ações de modal, tooltip,  collapse, tabs, etc...

## Observações

- Para quem não tem familiaridade Lumen é uma versão "reduzida", "modular" e de mais fácil utilização do Laravel, sendo mais destinadas a construir API's.
- Para conseguirmos reduzir o tempo desse projeto, não será necessário criar tela de autenticação, painel de configuração ou algo do tipo, visto que esta parte do sistema dificilmente será necessário ser modificado em um caso real dentro da empresa.
- A avaliação do projeto utilizará os seguintes critérios de avaliação em ordem decrescente de relevância: 
    - Tempo de desenvolvimento
    - legibilidade do código,
    - boas práticas (seguimento de normas PSR para o PHP, etc...)
    - Qualidade do versionamento do projeto (tamanho, mensagens claras que realmente defina as modificações feitas nos commits, não acumular muitos commits localmente para fazer push para que possamos acompanhar o andamento do projeto em "tempo real")
    - Comentários explicativos no código (não exagerar explicando coisas óbvias)
    - Experiência do usuário utilizando o front (funcionamento dos botões, comportamento do front em si)
    - Design do front (aspectos puramente visuais).    
