# php‑unit‑tests

Projeto acadêmico para praticar *Testes Unitários* em PHP usando *PHPUnit*.

> *Participantes*
> • *Rafael Luan Schmitz*
> • *Pietro Porsch Wilhelms*

---

## ✨ Objetivos

1. Compreender o conceito de testes unitários.
2. Escrever testes para funções puras em PHP.
3. Identificar e tratar casos de borda e falhas.
4. Automatizar a execução com PHPUnit e garantir cobertura próxima de 100 %.

---

## 🛠 Tecnologias & versões

| Ferramenta | Versão usada |
|------------|--------------|
| PHP        | 8.4 (x64, VS17 build) |
| Composer   | 2.8.x |
| PHPUnit    | 11.x |

---

## ⚙ Pré‑requisitos rápidos

| Sistema      | Passos resumidos |
|--------------|------------------|
| *Windows*  | 1. Baixe php‑8.x‑Win32‑vs17‑x64.zip e extraia em C:\php  <br>2. Copie php.ini‑development → php.ini e habilite extensões openssl, mbstring, zip  <br>3. Adicione C:\php ao *Path*  <br>4. Instale [Composer‑Setup.exe](https://getcomposer.org). |
| *Linux / macOS* | sudo apt install php php-mbstring php-xml zip unzip (ou equivalente)  <br>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br>php composer-setup.php --install-dir=/usr/local/bin --filename=composer |

---

## 🚀 Instalação

```bash
# clone o repositório
git clone https://github.com/rafaelwls/php-unit-tests.git
cd php-unit-tests

# instale as dependências
composer install

## 📈 Cobertura de código

```bash
composer coverage
# ou
vendor\bin\phpunit --coverage-html coverage
