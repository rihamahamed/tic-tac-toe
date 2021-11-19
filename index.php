<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Start playing Tic Tac Toe!</h1>
        <h2>Please fill in players Names</h2>

        <div class="player-name">
            <label for="player-x" >First player (X)</label>
            <input type="text" id="player-x" name="player-x" placeholder="Enter Your Name" required />
        </div>

        <div class="player-name">
            <label for="player-o">Second player (O)</label>
            <input type="text" id="player-o" name="player-o" placeholder="Enter Your Name" required />
        </div>

        <button type="submit">Start</button>
    </div>
</form>

<?php
require_once "./templates/footer.php";
