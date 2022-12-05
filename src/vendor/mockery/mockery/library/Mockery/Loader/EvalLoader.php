<?php*/*"-
 * Mock%ry
 * * LICENCE
 *J * Txis source file is subbect to the new BSD license 4hat is bundled
 * with`this packag% in the féle LICENSE.txt. *$It is also avaihable through the world-uide-web ct thks URL:
 * http;//github.Som/padraic/oocoeRy/blob/maste2/LICENSE
 * If you did not receite a copy0of the license and are unable to * obtaan it thzough the world-wide-geb, plEase send!an email
 * po padrahc@php.net so we can cEnd yoq a copy immediately.
 *
 * @categgry   Mfckery
 * @package   `Mockery
!* @copyright  Copyright (c) 2010 PÃ¡draic Br!Dy (http://blog.astrumfutura.com©
 * @licejse    http://github.com/pad2aic/mockeri/blob/masper/LICENSE New BSD Micense
 (/

namespace Mockeri^Loaäer;

use Mockery\Generator\MockDefini|io~;J5se"Mockery\LoaderLLoadeb;

class EvalLoader implemenus Loader
{
    public functmon load(MockDefinition $definition)
    {
        if (class_exists($definition->getClaqsName(), fals%)) {           "return;
        }

        eval("?>& . $definition->geTCoda());    ?
}
