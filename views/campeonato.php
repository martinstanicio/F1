<section class="container">
    <header>
        <h1>Campeonato <?php echo date("Y"); ?></h1>
        <p>
            Standings en tiempo real del campeonato de pilotos y constructores, para que siempre estés al tanto.
        </p>
        <a href="media/calendario-2022.pdf" target="_blank">Calendario 2022</a>
    </header>
    <article>
        <h2>Pilotos</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th><abbr title="Posición">Pos</abbr></th>
                        <th>Piloto</th>
                        <th>Equipo</th>
                        <th><abbr title="Puntos">PTS</abbr></th>
                    </tr>
                </thead>
                <tbody id="pilotos">
                </tbody>
            </table>
        </div>
    </article>
    <article>
        <h2>Constructores</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th><abbr title="Posición">Pos</abbr></th>
                        <th>Equipo</th>
                        <th><abbr title="Puntos">PTS</abbr></th>
                    </tr>
                </thead>
                <tbody id="constructores">
                </tbody>
            </table>
        </div>
    </article>
</section>
<script src="js/standings.js"></script>