<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleto Itau</title>
    <style>
        <!--.cp {  font: bold 10px Arial; color: black}
            <!--.ti {  font: 9px Arial, Helvetica, sans-serif}
            <!--.ld { font: bold 15px Arial; color: #000000}
            <!--.ct { FONT: 9px "Arial Narrow"; COLOR: #000033}
            <!--.cn { FONT: 9px Arial; COLOR: black }
            <!--.bc { font: bold 20px Arial; color: #000000 }
            <!--.ld2 { font: bold 12px Arial; color: #000000 }
        -->
    </style>

</head>
<BODY text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>
    <table cellspacing=0 cellpadding=0 width=666 border=0><TBODY><TR><TD class=ct width=666><img height=1 src="/res/img/boleto/6.png" width=665 border=0></TD></TR><TR><TD class=ct width=666><div align=right><b class=cp>Recibo
        do Sacado</b></div></TD></tr></tbody></table><table width=666 cellspacing=5 cellpadding=0 border=0><tr><td width=41></TD></tr></table>
        <table width=666 cellspacing=5 cellpadding=0 border=0 align=Default>
          <tr>
            <td width=41><IMG SRC="/res/img/boleto.jpg"></td>
            <td class=ti width=455>
            <?php echo htmlspecialchars( $dadosboleto["identificacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
            <?php echo htmlspecialchars( $dadosboleto["endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
            <?php echo htmlspecialchars( $dadosboleto["cidade_uf"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
            </td>
            <td align=RIGHT width=150 class=ti>&nbsp;</td>
          </tr>
        </table>
        <table cellspacing=0 cellpadding=0 width=666 border=0><tr><td class=cp width=150>
          <span class="campo"><IMG
              src="/res/img/boleto/logoitau.jpg" width="150" height="40"
              border=0></span></td>
        <td width=3 valign=bottom><img height=22 src="/res/img/boleto/3.png" width=2 border=0></td><td class=cpt width=58 valign=bottom><div align=center><font class=bc><?php echo htmlspecialchars( $dadosboleto["codigo_banco_com_dv"], ENT_COMPAT, 'UTF-8', FALSE ); ?></font></div></td><td width=3 valign=bottom><img height=22 src="/res/img/boleto/3.png" width=2 border=0></td><td class=ld align=right width=453 valign=bottom><span class=ld>
        <span class="campotitulo">
        <?php echo htmlspecialchars( $dadosboleto["linha_digitavel"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span></span></td>
        </tr><tbody><tr><td colspan=5><img height=2 src="/res/img/boleto/2.png" width=666 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=298 height=4>Cedente</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=126 height=4>Ag�ncia/C�digo
        do Cedente</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=34 height=4>Esp�cie</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=53 height=4>Quantidade</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=120 height=4>Nosso
        n�mero</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=298 height=5>
          <span class="campo"><?php echo htmlspecialchars( $dadosboleto["cedente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=126 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["agencia_codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=34 height=5><span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["especie"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span>
         </td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=53 height=5><span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["quantidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span>
         </td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=120 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["nosso_numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=298 height=1><img height=1 src="/res/img/boleto/2.png" width=298 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=126 height=1><img height=1 src="/res/img/boleto/2.png" width=126 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=34 height=1><img height=1 src="/res/img/boleto/2.png" width=34 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=53 height=1><img height=1 src="/res/img/boleto/2.png" width=53 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=120 height=1><img height=1 src="/res/img/boleto/2.png" width=120 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top colspan=3 height=4>N�mero
        do documento</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=132 height=4>CPF/CNPJ</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=134 height=4>Vencimento</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>Valor
        documento</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top colspan=3 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["numero_documento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=132 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["cpf_cnpj"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=134 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["valor_boleto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=113 height=1><img height=1 src="/res/img/boleto/2.png" width=113 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=72 height=1><img height=1 src="/res/img/boleto/2.png" width=72 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=132 height=1><img height=1 src="/res/img/boleto/2.png" width=132 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=134 height=1><img height=1 src="/res/img/boleto/2.png" width=134 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=113 height=5>(-)
        Desconto / Abatimentos</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=112 height=4>(-)
        Outras dedu��es</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=113 height=4>(+)
        Mora / Multa</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=113 height=4>(+)
        Outros acr�scimos</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(=)
        Valor cobrado</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=113 height=5></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=112 height=5></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=113 height=5></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=113 height=5></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=113 height=1><img height=1 src="/res/img/boleto/2.png" width=113 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=112 height=1><img height=1 src="/res/img/boleto/2.png" width=112 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=113 height=1><img height=1 src="/res/img/boleto/2.png" width=113 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=113 height=1><img height=1 src="/res/img/boleto/2.png" width=113 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=659 height=4>Sacado</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=659 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["sacado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=659 height=1><img height=1 src="/res/img/boleto/2.png" width=659 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct  width=7 height=5></td><td class=ct  width=564 >Demonstrativo</td><td class=ct  width=7 height=5></td><td class=ct  width=88 >Autentica��o
        mec�nica</td></tr><tr><td  width=7 ></td><td class=cp width=564 >
        <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["demonstrativo1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>  
          <?php echo htmlspecialchars( $dadosboleto["demonstrativo2"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
          <?php echo htmlspecialchars( $dadosboleto["demonstrativo3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
          </span>
          </td><td  width=7 ></td><td  width=88 ></td></tr></tbody></table><table cellspacing=0 cellpadding=0 width=666 border=0><tbody><tr><td width=7></td><td  width=500 class=cp>
        
        </td><td width=159></td></tr></tbody></table><table cellspacing=0 cellpadding=0 width=666 border=0><tr><td class=ct width=666></td></tr><tbody><tr><td class=ct width=666>
        <div align=right>Corte na linha pontilhada</div></td></tr><tr><td class=ct width=666><img height=1 src="/res/img/boleto/6.png" width=665 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 width=666 border=0><tr><td class=cp width=150>
         <br> <span class="campo"><IMG
              src="/res/img/boleto/logoitau.jpg" width="150" height="40"
              border=0></span></td>
        <td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td><td class=cpt width=58 valign=bottom><div align=center><font class=bc><?php echo htmlspecialchars( $dadosboleto["codigo_banco_com_dv"], ENT_COMPAT, 'UTF-8', FALSE ); ?></font></div></td><td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td><td class=ld align=right width=453 valign=bottom><span class=ld>
        <span class="campotitulo">
        <?php echo htmlspecialchars( $dadosboleto["linha_digitavel"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span></span></td>
        </tr><tbody><tr><td colspan=5><img height=2 src="/res/img/boleto/2.png" width=666 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=472 height=4>Local
        de pagamento</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>Vencimento</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=472 height=5>Pag�vel
        em qualquer Banco at� o vencimento</td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["data_vencimento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=472 height=1><img height=1 src="/res/img/boleto/2.png" width=472 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=472 height=4>Cedente</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>Ag�ncia/C�digo
        cedente</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=472 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["cedente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["agencia_codigo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=472 height=1><img height=1 src="/res/img/boleto/2.png" width=472 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=113 height=4>Data
        do documento</td><td class=ct valign=top width=7 height=4> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=153 height=4>N<u>o</u>
        documento</td><td class=ct valign=top width=7 height=4> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=62 height=4>Esp�cie
        doc.</td><td class=ct valign=top width=7 height=4> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=34 height=4>Aceite</td><td class=ct valign=top width=7 height=4>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=82 height=4>Data
        processamento</td><td class=ct valign=top width=7 height=4> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>Nosso
        n�mero</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=113 height=5><div align=left>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["data_documento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=153 height=5>
            <span class="campo">
            <?php echo htmlspecialchars( $dadosboleto["numero_documento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
            </span></td>
          <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=62 height=5><div align=left><span class="campo">
            <?php echo htmlspecialchars( $dadosboleto["especie_doc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span>
         </div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=34 height=5><div align=left><span class="campo">
         <?php echo htmlspecialchars( $dadosboleto["aceite"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
         </span>
         </div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=82 height=5><div align=left>
           <span class="campo">
           <?php echo htmlspecialchars( $dadosboleto["data_processamento"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
           </span></div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5>
             <span class="campo">
             <?php echo htmlspecialchars( $dadosboleto["nosso_numero"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
             </span></td>
        </tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=113 height=1><img height=1 src="/res/img/boleto/2.png" width=113 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=153 height=1><img height=1 src="/res/img/boleto/2.png" width=153 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=62 height=1><img height=1 src="/res/img/boleto/2.png" width=62 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=34 height=1><img height=1 src="/res/img/boleto/2.png" width=34 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=82 height=1><img height=1 src="/res/img/boleto/2.png" width=82 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr>
        <td class=ct valign=top width=7 height=4> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top COLSPAN="3" height=4>Uso
        do banco</td><td class=ct valign=top height=4 width=7> <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=83 height=4>Carteira</td><td class=ct valign=top height=4 width=7>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=53 height=4>Esp�cie</td><td class=ct valign=top height=4 width=7>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=123 height=4>Quantidade</td><td class=ct valign=top height=4 width=7>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=72 height=4>
        Valor Documento</td><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(=)
        Valor documento</td></tr><tr> <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td valign=top class=cp height=5 COLSPAN="3"><div align=left>
         </div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=83>
        <div align=left> <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["carteira"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span></div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=53><div align=left><span class="campo">
        <?php echo htmlspecialchars( $dadosboleto["especie"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span>
         </div></td><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=123><span class="campo">
         <?php echo htmlspecialchars( $dadosboleto["quantidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
         </span>
         </td>
         <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top  width=72>
           <span class="campo">
           <?php echo htmlspecialchars( $dadosboleto["valor_unitario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
           </span></td>
         <td class=cp valign=top width=7 height=5> <img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5>
           <span class="campo">
           <?php echo htmlspecialchars( $dadosboleto["valor_boleto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
           </span></td>
        </tr><tr><td valign=top width=7 height=1> <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=75 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=31 height=1><img height=1 src="/res/img/boleto/2.png" width=31 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=83 height=1><img height=1 src="/res/img/boleto/2.png" width=83 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=53 height=1><img height=1 src="/res/img/boleto/2.png" width=53 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=123 height=1><img height=1 src="/res/img/boleto/2.png" width=123 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=72 height=1><img height=1 src="/res/img/boleto/2.png" width=72 border=0></td><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody>
        </table><table cellspacing=0 cellpadding=0 width=666 border=0><tbody><tr><td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left><tbody>
        <tr> <td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr>
        <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr>
        <td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=1 border=0></td></tr></tbody></table></td><td valign=top width=468 rowspan=5><font class=ct>Instru��es
        (Texto de responsabilidade do cedente)</font><br><br><span class=cp> <FONT class=campo>
        <?php echo htmlspecialchars( $dadosboleto["instrucoes1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
        <?php echo htmlspecialchars( $dadosboleto["instrucoes2"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
        <?php echo htmlspecialchars( $dadosboleto["instrucoes3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><br>
        <?php echo htmlspecialchars( $dadosboleto["instrucoes4"], ENT_COMPAT, 'UTF-8', FALSE ); ?></FONT><br><br>
        </span></td>
        <td align=right width=188><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(-)
        Desconto / Abatimentos</td></tr><tr> <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr><tr>
        <td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table></td></tr><tr><td align=right width=10>
        <table cellspacing=0 cellpadding=0 border=0 align=left><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td valign=top width=7 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=1 border=0></td></tr></tbody></table></td><td align=right width=188><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(-)
        Outras dedu��es</td></tr><tr><td class=cp valign=top width=7 height=5> <img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table></td></tr><tr><td align=right width=10>
        <table cellspacing=0 cellpadding=0 border=0 align=left><tbody><tr><td class=ct valign=top width=7 height=4>
        <img height=4 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=1 border=0></td></tr></tbody></table></td><td align=right width=188>
        <table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(+)
        Mora / Multa</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr><tr>
        <td valign=top width=7 height=1> <img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1>
        <img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table></td></tr><tr><td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left><tbody><tr>
        <td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=1 border=0></td></tr></tbody></table></td><td align=right width=188>
        <table cellspacing=0 cellpadding=0 border=0><tbody><tr> <td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(+)
        Outros acr�scimos</td></tr><tr> <td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table></td></tr><tr><td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td></tr></tbody></table></td><td align=right width=188><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>(=)
        Valor cobrado</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top align=right width=180 height=5></td></tr></tbody>
        </table></td></tr></tbody></table><table cellspacing=0 cellpadding=0 width=666 border=0><tbody><tr><td valign=top width=666 height=1><img height=1 src="/res/img/boleto/2.png" width=666 border=0></td></tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=659 height=4>Sacado</td></tr><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=659 height=5><span class="campo">
        <?php echo htmlspecialchars( $dadosboleto["sacado"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span>
        </td>
        </tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=cp valign=top width=7 height=5><img height=5 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=659 height=5><span class="campo">
        <?php echo htmlspecialchars( $dadosboleto["endereco1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </span>
        </td>
        </tr></tbody></table><table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=cp valign=top width=472 height=4>
          <span class="campo">
          <?php echo htmlspecialchars( $dadosboleto["endereco2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </span></td>
        <td class=ct valign=top width=7 height=4><img height=4 src="/res/img/boleto/1.png" width=1 border=0></td><td class=ct valign=top width=180 height=4>C�d.
        baixa</td></tr><tr><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=472 height=1><img height=1 src="/res/img/boleto/2.png" width=472 border=0></td><td valign=top width=7 height=1><img height=1 src="/res/img/boleto/2.png" width=7 border=0></td><td valign=top width=180 height=1><img height=1 src="/res/img/boleto/2.png" width=180 border=0></td></tr></tbody></table><TABLE cellSpacing=0 cellPadding=0 border=0 width=666><TBODY><TR><TD class=ct  width=7 height=5></TD><TD class=ct  width=409 >Sacador/Avalista</TD><TD class=ct  width=250 ><div align=right>Autentica��o
        mec�nica - <b class=cp>Ficha de Compensa��o</b></div></TD></TR><TR><TD class=ct  colspan=3 ></TD></tr></tbody></table><TABLE cellSpacing=0 cellPadding=0 width=666 border=0><TBODY><TR><TD vAlign=bottom align=left height=50><?php echo print_r($fbarcode); ?></TD>
        </tr></tbody></table><TABLE cellSpacing=0 cellPadding=0 width=666 border=0><TR><TD class=ct width=666></TD></TR><TBODY><TR><TD class=ct width=666><div align=right>Corte
        na linha pontilhada</div></TD></TR><TR><TD class=ct width=666><img height=1 src="/res/img/boleto/6.png" width=665 border=0></TD></tr></tbody></table>
          <!-- <script>
            window.print();
          </script> -->
            
        </BODY>

        
</html>
