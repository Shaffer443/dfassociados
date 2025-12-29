- link: https://youtu.be/wWK8BvgDIEQ?si=iSP6lfiu75iwjxri

# O que é Composer?

- link: https://getcomposer.org/

O **Composer** é a ferramenta essencial de **gerenciamento de dependências** para a linguagem de programação PHP.

Imagine que você está construindo uma casa (seu projeto PHP). Em vez de fabricar seus próprios tijolos, fiação e canos, você "encomenda" esses componentes de fornecedores especializados. O Composer é o gerente que faz esses pedidos, garante que as peças certas cheguem e que elas sejam compatíveis entre si.

---

### Como ele funciona na prática?

1. **Declaração:** Você cria um arquivo chamado `composer.json` no seu projeto, listando quais bibliotecas externas você precisa (ex: uma biblioteca para enviar e-mails ou uma para conectar ao banco de dados).
2. **Instalação:** Ao rodar o comando `composer install`, ele baixa todas as bibliotecas e as coloca em uma pasta chamada `/vendor`.
3. **Autoload:** Ele cria um arquivo de "carregamento automático". No seu código, você só precisa incluir uma linha: `require 'vendor/autoload.php';`. A partir daí, todas as bibliotecas ficam disponíveis instantaneamente.

### Por que ele é importante?

* **Gestão de Versões:** Se a Biblioteca A precisa da Biblioteca B na versão 2.0, o Composer resolve esse conflito automaticamente para você.
* **Padronização:** Antes do Composer, cada desenvolvedor baixava arquivos `.zip` manualmente e os colocava em pastas aleatórias, o que era um caos para manter.
* **Ecossistema (Packagist):** Ele se conecta ao [Packagist.org](https://packagist.org/), o repositório central onde existem milhares de pacotes gratuitos prontos para uso.

### Um exemplo do arquivo `composer.json`

```json
{
    "require": {
        "monolog/monolog": "2.0.*"
    }
}

```

*Neste exemplo, você está dizendo ao Composer que seu projeto depende da biblioteca de logs "Monolog".*

---

> **Dica:** O Composer não é um "gerenciador de pacotes" no sentido estrito (como o `apt` ou `yum`), pois ele instala as bibliotecas **por projeto**, e não de forma global no sistema operacional.

### 1. Instalações:

No windows, pode instalar através de um arquivo .exe, disponivel no site oficial.
Em outros sistemas operacionais, instalação diretom dentro do diretório alvo.

Exemplo de instalação:

![alt text](image-1.png)

---

# Usando PHP Mailer

- Link do projeto no Giuthub: https://github.com/PHPMailer/PHPMailer

Usando o **Composer**, podemos baixar os arquivos necessários e baixa-los já dentro do diretorio onde o script que etamos usando para o projeto de contato, que np caso é _/contato/_

Bastando rodar o **composer require phpmailer/phpmailer** dentro da pasta do projeto.

Exemplo:
```
PS C:\Users\shaff\Documents\dfassociados\contato> composer require phpmailer/phpmailer
```
---

# **OpenSSL**

Esse erro acontece porque o PHPMailer precisa da extensão **OpenSSL** ativa no PHP para conseguir se comunicar com os servidores do Gmail via conexão segura (SSL/TLS). Por padrão, em muitas instalações (como o XAMPP ou PHP puro), essa extensão vem desativada.

Aqui está como ativar em 1 minuto:

### 1. Localize o arquivo `php.ini`

Se você estiver usando **XAMPP**:

1. Abra o **XAMPP Control Panel**.
2. Na linha do **Apache**, clique no botão **Config**.
3. Escolha a opção **PHP (php.ini)**.

Se não usar XAMPP, o arquivo geralmente está na pasta onde você instalou o PHP (ex: `C:\php\php.ini`).

---

### 2. Ative a extensão

1. Com o arquivo `php.ini` aberto no Bloco de Notas (ou VS Code), aperte `Ctrl + F` e procure por: **`extension=openssl`**.
2. Você provavelmente encontrará uma linha assim:
`;extension=openssl`
3. **Remova o ponto e vírgula (`;`)** do início da linha. O ponto e vírgula serve para comentar (desativar) a função. Deve ficar exatamente assim:
`extension=openssl`

---

### 3. Reinicie o Servidor

**Este passo é essencial.** As alterações no `php.ini` só passam a valer quando o servidor "nasce" de novo.

* Se estiver no XAMPP, clique em **Stop** no Apache e depois em **Start**.
* Se estiver usando o servidor embutido do PHP pelo terminal (`php -S localhost:8000`), pare o comando com `Ctrl + C` e rode-o novamente.

---

### 4. Verifique se funcionou

Você pode rodar este comando no seu terminal para confirmar se o OpenSSL agora está "vivo":

```powershell
php -m | findstr openssl

```

*Se retornar a palavra "openssl", está ativo.*

### Bônus: Extensão `mbstring`

Às vezes, o PHPMailer também pede a extensão `mbstring`. Se o erro mudar para "Extension missing: mbstring", faça o mesmo processo: procure por `;extension=mbstring` no `php.ini` e remova o `;`.

---

Esse erro de **"Maximum execution time exceeded"** significa que o script tentou se conectar ao Gmail, mas a conexão demorou tanto que o PHP "desistiu" para não travar o servidor.

No caso do PHPMailer, isso geralmente acontece por dois motivos: **bloqueio de porta (Firewall/Antivírus)** ou **configuração incorreta de SSL/TLS**.

Aqui está o que você deve ajustar no seu arquivo `envio.php`:

### 1. Troque a Porta e a Criptografia

Muitas vezes, a porta **465** é bloqueada por provedores de internet ou firewalls locais. A configuração mais estável hoje em dia é usar a porta **587** com **STARTTLS**.

Altere essas linhas no seu script:

```php
// Altere de:
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
$mail->Port       = 465;                                    

// Para:
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
$mail->Port       = 587;                                    

```

### 2. Adicione uma configuração de segurança (Dica de Ouro)

Às vezes, o servidor local (XAMPP/WAMP) falha ao validar o certificado SSL do Gmail. Você pode dizer ao PHPMailer para ignorar essa verificação (apenas para teste local) adicionando este bloco antes do `$mail->send()`:

```php
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

```

### 3. Aumente o tempo de execução (Temporário)

Para evitar que o PHP pare o script tão rápido enquanto testamos, adicione esta linha logo no **início** do seu arquivo `envio.php`, logo após o `<?php`:

```php
set_time_limit(300); // Aumenta o limite para 5 minutos

```

---

### Resumo de como deve ficar o bloco de configuração:

```php
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'rafaelgouveiamelo@gmail.com';
$mail->Password   = 'atli xyjn dydo ljmv'; // Lembre-se de trocar depois
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Alterado
$mail->Port       = 587; // Alterado

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

```

### Por que isso trava?

Quando a porta está bloqueada ou o SSL falha silenciosamente, o PHPMailer fica "ouvindo" o servidor e nunca recebe resposta. O PHP então mata o processo ao atingir 30 segundos.
