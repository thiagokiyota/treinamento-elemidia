# Design Pattern

## Criação

### Singleton, Factory Method, AbstractFactory, Prototype e Builder

Utilizando a estrutura dos patterns de criação, você deverá construir um
componente para registrar logs de sistema, esse logs poderão ser do tipo:
ERROR e WARNING.

Considerando que para logs, você deverá ter somente uma instância em todo o sistema,
mais poderá ter várias formas de armazenar esses logs, você deve prever isso
em seu projeto, a princípio será armazenado apenas como sistema de arquivos TXT e XML.

Você deverá disponibilizar um gerenciador de logs onde seja possível visualizar
uma lista de logs podendo filtrá-los por seus tipos. Nesse gerenciador
deverá possuir também uma tela que seja mostrada a porcentagem de cada tipo de log
registrado.

O gerenciador poderá ter seu tema customizado, sendo assim, deverá prever esse
recurso.

Alguns sistemas irão utilizar seu componente e em breve ele sofrerá um upgrade,
porém, todos os clientes que utilizam seu componente não poderão sofrer alterações.

Abaixo estão alguns exemplos de clientes que utilizarão seu componente.

```PHP
class Financeiro
{
    public function pagarFatura()
    {
        // ... implementação de pagamento de fatura

        // Aqui será utilizado seu componente de log
    }
}
```

```PHP
class Email
{
    public function enviarEmail()
    {
        // ... implementação de envio de email

        // Aqui será utilizado seu componente de log
    }
}
```

```PHP
class Autenticacao
{
    public function autenticar()
    {
        // ... implementação de autenticação

        // Aqui será utilizado seu componente de log
    }
}
```

