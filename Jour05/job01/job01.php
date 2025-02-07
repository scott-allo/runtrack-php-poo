<?php
session_start();

class Game {
    private $board;
    private $currentPlayer;
    private $winner;

    public function __construct() {
        $this->resetGame();
    }

    public function resetGame() {
        $this->board = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
        $this->currentPlayer = 'X';
        $this->winner = null;
    }

    public function playMove($row, $col) {
        if ($this->board[$row][$col] === '-' && !$this->winner) {
            $this->board[$row][$col] = $this->currentPlayer;
            $this->winner = $this->checkWinner();
            if (!$this->winner) {
                $this->currentPlayer = ($this->currentPlayer === 'X') ? 'O' : 'X';
            }
        }
    }

    private function checkWinner() {
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] !== '-' && $this->board[$i][0] === $this->board[$i][1] && $this->board[$i][1] === $this->board[$i][2]) return $this->board[$i][0];
            if ($this->board[0][$i] !== '-' && $this->board[0][$i] === $this->board[1][$i] && $this->board[1][$i] === $this->board[2][$i]) return $this->board[0][$i];
        }
        if ($this->board[0][0] !== '-' && $this->board[0][0] === $this->board[1][1] && $this->board[1][1] === $this->board[2][2]) return $this->board[0][0];
        if ($this->board[0][2] !== '-' && $this->board[0][2] === $this->board[1][1] && $this->board[1][1] === $this->board[2][0]) return $this->board[0][2];
        return (array_reduce($this->board, fn($carry, $row) => $carry && !in_array('-', $row), true)) ? 'Draw' : null;
    }

    public function getBoard() { return $this->board; }
    public function getCurrentPlayer() { return $this->currentPlayer; }
    public function getWinner() { return $this->winner; }
}

if (!isset($_SESSION['game'])) $_SESSION['game'] = new Game();
$game = $_SESSION['game'];

if (isset($_POST['cell'])) {
    $row = $_POST['cell'][0];
    $col = $_POST['cell'][1];
    $game->playMove($row, $col);
}

if (isset($_POST['reset'])) $game->resetGame();

$board = $game->getBoard();
$winner = $game->getWinner();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <style>
        table { border-collapse: collapse; margin: auto; }
        td { width: 50px; height: 50px; text-align: center; }
        button { width: 100%; height: 100%; font-size: 1.2rem; cursor: pointer; }
        .message { text-align: center; margin: 20px; font-size: 1.5rem; }
    </style>
</head>
<body>

<div class="message">
    <?= $winner ? ($winner === 'Draw' ? "Match nul !" : "$winner a gagné !") : "Tour de : " . $game->getCurrentPlayer(); ?>
</div>

<form method="POST">
    <table border="1">
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <?php if ($board[$i][$j] === '-' && !$winner): ?>
                            <button type="submit" name="cell" value="<?= $i . $j; ?>">-</button>
                        <?php else: ?>
                            <?= $board[$i][$j]; ?>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <div style="text-align: center;">
        <button type="submit" name="reset">Réinitialiser</button>
    </div>
</form>

</body>
</html>
