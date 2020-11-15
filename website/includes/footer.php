<footer>

    <!-- <ul>
        <li>Copyright <?php echo date('Y'); ?>, Kira Abell.</li>
        <li>All rights reserved.</li>
        <li><a href="https://validator.w3.org/check/referer">HTML5</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS3</a></li>
    </ul> -->

    <ul>
        <li>Copyright <?php 
                $startDate = 2020;
                $currentDate = date('Y');
                if($startDate == $currentDate) {
                    echo $currentDate;
                } else {
                    echo "{$startDate} - {$currentDate}";
                } ?>, Kira Abell.</li>
        <li>All rights reserved.</li>
        <li><a href="https://validator.w3.org/check/referer">HTML5</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS3</a></li>
    </ul>

</footer>

</div> <!-- end wrapper -->

</body>

</html>