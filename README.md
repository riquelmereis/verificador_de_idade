# 🎯 Verificador de Maioridade em PHP

Projeto desenvolvido como parte do exercício prático **"Atividade 3: Desafio Verificador de Maioridade"**. A aplicação consiste em um formulário web em PHP que valida se o usuário possui a idade mínima para acesso e registra as entradas permitidas em um arquivo de log.

---

## 📌 Funcionalidades

* **Formulário de Entrada:** Solicita o **Nome** e o **Ano de Nascimento** do usuário.
* **Cálculo da Idade:** Processa a idade com base no ano informado.
* **Validação de Maioridade:**
  * **Se maior de idade ($\ge$ 18 anos):** Exibe a mensagem `"Acesso permitido, [Nome]!"` e grava o registro em `log_acessos.txt`.
  * **Se menor de idade (< 18 anos):** Exibe a mensagem `"Acesso negado, [Nome]!"` sem registrar no arquivo.
* **Geração Automática de Log:** O arquivo `log_acessos.txt` é criado automaticamente no primeiro acesso liberado.

---
