<h1 class="row justify-content-center" >Novo usuário</h1>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">

            <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrar">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome"  name="nome" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="data_nasc" class="form-label">
                        Data de Nascimento:
                    </label>
                    <input type="date" id="data_nasc" name="data_nasc" class="form-control" >
                </div>

                <div class="d-grid">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</form>