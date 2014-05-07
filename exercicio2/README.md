# Design Pattern

## Criação 

### Singleton e Factory Method

Utilizando a estrutura do pattern Singleton e Factory Method, você deverá construir 
um componente para registrar logs do sistema, esse logs poderão ser do tipo: DEBUG,
ERROR, WARNING e INFO.

Considerando que para logs, você deverá ter somente uma instância em todo o sistema,
mais você poderá ter várias formas de armazenar esses logs, a princípio será
armazenado apenas como sistema de arquivos e posteriormente em um serviço RESTful.

Alguns sistema irão utilizar seu componente, porém, quando você migrar para RESTful, 
todos esses sistemas não poderão sofrer alteração, a migração deverá ser transparente 
para todos os clientes. 

Abaixo estão alguns exemplos de clientes que utilizarão seu componente.

```PHP
class Financeiro
{
    public function pagarFatura()
    {
        // ... implementação de pagamento de fatura

        // Aqui será utilizado seu compomente de log
    }
}
```

```PHP
class Email
{
    public function enviarEmail()
    {
        // ... implementação de envio de email

        // Aqui será utilizado seu compomente de log
    }
}
```

```PHP
class Autenticacao
{
    public function autenticar()
    {
        // ... implementação de autenticação

        // Aqui será utilizado seu compomente de log
    }
}
```

