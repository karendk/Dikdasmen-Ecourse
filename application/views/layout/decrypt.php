<script type="text/javascript">
    $('#sec').keyup(function() {
    var string = $(this).val();
    $("#dec").html(string);//lapis DEC TALOS
        var dectalos = {
            'A': 'q',
            'B': '4',
            'C': '6',
            'D': '8',
            'E': 'w',
            'F': 'r',
            'G': 't',
            'H': 'l',
            'I': 'j',
            'J': 'v',

            'K': 'u',
            'L': 'g',
            'M': '2',
            'N': 'm',
            'O': 'x',
            'P': 'y',
            'Q': 'z',
            'R': 'o',

            'S': 'i',
            'T': '0',
            'U': 'h',
            'V': '1',   
            'W': '3',
            'X': '5',
            'Y': '7',
            'Z': 'p',

            '0': 'e',
            '1': 'a',
            '2': 'f',
            '3': 's',
            '4': 'b',
            '5': 'd',
            '6': 'c',
            '7': '&#57;',
            '8': 'k',
            '9': 'n'
        };
        $("#dec").html(function(index, html){
            $.each(dectalos, function(i, v){
                html = html.replace(new RegExp(i, 'g'), v, 'g');
            });
            return html;
        });

    });
</script>