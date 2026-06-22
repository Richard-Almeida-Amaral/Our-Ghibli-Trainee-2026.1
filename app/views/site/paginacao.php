<?php
$paginaAtual = isset($paginaAtual) ? (int) $paginaAtual : 1;
$totalPaginas = isset($totalPaginas) ? (int) $totalPaginas : 1;
$textoBusca = $_GET['busca'] ?? '';
?>

<nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item<?= $paginaAtual <= 1 ? ' disabled' : '' ?>">
            <a class="page-link" href="?paginacaoNumero=<?= $paginaAtual - 1 ?>&busca=<?= $textoBusca ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($numeroPagina = 1; $numeroPagina <= $totalPaginas; $numeroPagina++): ?>
            <li class="page-item <?= $numeroPagina == $paginaAtual ? 'active' : '' ?>">
                <a class="page-link" href="?paginacaoNumero=<?= $numeroPagina ?>&busca=<?= $textoBusca ?>">
                    <?= $numeroPagina ?>
                </a>
            </li>
        <?php endfor; ?>

        <li class="page-item<?= $paginaAtual >= $totalPaginas ? ' disabled' : '' ?>">
            <a class="page-link" href="?paginacaoNumero=<?= $paginaAtual + 1 ?>&busca=<?= $textoBusca ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>

    </ul>
</nav>