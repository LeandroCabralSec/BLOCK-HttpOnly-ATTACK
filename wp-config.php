Se um navegador não oferecer suporte ao HttpOnly e um site tentar definir um cookie HttpOnly, o sinalizador HttpOnly será ignorado pelo navegador, 
criando assim um cookie tradicional acessível por script. Como resultado, o cookie fica vulnerável a roubo de modificação por script mal-intencionado.

If a browser does not support HttpOnly and a website attempts to set an HttpOnly cookie, the HttpOnly flag will be ignored by the browser, thus creating 
a traditional script-accessible cookie. As a result, the cookie is vulnerable to theft of modification by malicious script.

/** # BLOQUEAR ATAQUE DE HttpOnly # */
/ ** # BLOCK HttpOnly ATTACK # * /
header('X-Frame-Options: SAMEORIGIN');

@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
