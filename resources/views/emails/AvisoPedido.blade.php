<html>
    <body>
        <p>Olá {{ $pedido->nome }}!</p>
        <p></p>

        @if($pedido->status === 1)
            <p>Seu pedido foi aceito! Entraremos em contato em breve.</p>
        @elseif ($pedido->status === 2)
            <p>Seu pedido esta em andamento! Entraremos em contato em breve.</p>
        @elseif ($pedido->status === 3)
            <p>Seu pedido foi concluído! Entraremos em contato em breve.</p>
        @elseif ($pedido->status === 4)
            <p>Seu pedido foi recusado! Entraremos em contato em breve.</p>
        @else
            Furou!
        @endif

        <p></p>
        <p>Att, <br>
        Marmitaria!</p>
    </body>
</html>