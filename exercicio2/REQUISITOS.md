# Requisitos e Casos de Uso

## Logs de Sistemas

### Requisitos

* R001 - Registrar logs com suporte aos tipos ERROR e WARNING
* R002 - O Log poderá ser armazenados de formas diferentes, as básicas serão TXT e XML
* R003 - Possuir um gerenciador disponibilizar uma tela para listar todos os logs registrados
* R004 - Na tela de listagem de logs, disponibilizar um filtro de logs por tipo
* R005 - Possuir uma tela no gerenciador para visualizar a porcentagem de logs registrados por tipo
* R006 - O gerenciador poderá ter seu tema customizado por qualquer cliente

### Casos de Uso

1. Registrar logs [R001, R002]
2. Listar logs [R003]
3. Filtrar logs por tipo [R004]
4. Mostrar porcentagem de logs registrados por tipo [R005]
5. Customizar tema do gerenciador [R006]

***

### Detalhamento dos casos de uso

#### Registrar logs [R001, R002]

##### Pré-condições

* Se a forma de armazenamento for sistema de arquivos, as configurações, tais como,
nome e diretório já deverão estar configurados.

1. O cliente deverá chamar um método do componente de logs que represente seu
tipo e passar uma mensagem
1.1 Se o tipo não existir, lançar um alerta

#### Listar logs [R003]

##### Pré-condições

* Possuir logs registrados

1. Selecionar a tela de listagem de logs
1.1 Se não existir logs registrados, lançar um alerta

#### Filtrar logs por tipo [R004]

##### Pré-condições

* Possuir logs registrados

1. Selecionar a tela de listagem de logs
2. Selecionar tipo de log a ser filtrado
2.1 Se não existir logs do tipo selecionado, lançar um alerta

#### Mostrar porcentagem de logs registrados por tipo [R005]

##### Pré-condições

* Possuir logs registrados

1. Selecionar tela com a porcentagem de logs registrados por tipo
1.1 Se não existir logs registrados, lançar um alerta

#### Customizar tema do gerenciador [R006]

##### Pré-condições

* Possuir ao menos um tema

1. Selecionar a tela de listagem de logs ou tela de porcentagem de logs
2. Selecionar tema e aplicar