<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
}

if (isset($_POST['cell'])) {
    $_SESSION['board'][$_POST['cell']] = $_SESSION['player'];
    $_SESSION['player'] = $_SESSION['player'] == 'X' ? 'O' : 'X';
}

if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
}

$winningCombinations = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], // rows
    [0, 3, 6], [1, 4, 7], [2, 5, 8], // columns
    [0, 4, 8], [2, 4, 6]  // diagonals
];

foreach ($winningCombinations as $combination) {
    if ($_SESSION['board'][$combination[0]] != '-' &&
        $_SESSION['board'][$combination[0]] == $_SESSION['board'][$combination[1]] &&
        $_SESSION['board'][$combination[0]] == $_SESSION['board'][$combination[2]]) {
        echo $_SESSION['board'][$combination[0]] . " a gagné";
        $_SESSION['board'] = array_fill(0, 9, '-');
        $_SESSION['player'] = 'X';
        break;
    }
}

if (!in_array('-', $_SESSION['board'])) {
    echo "Match nul";
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
}
?>

<form method="post">
    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <button type="submit" name="cell" value="<?= $i * 3 + $j ?>">
                            <?= $_SESSION['board'][$i * 3 + $j] ?>
                        </button>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>