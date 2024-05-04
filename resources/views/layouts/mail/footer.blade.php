<tr bgcolor="#000000">
    <td>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="container-middle">
            <tbody>
            <tr>
                <td height="10" style="font-size: 1px; line-height: 10px;">&nbsp;</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td class="" style="font-family: Candara; font-size: 1em; color: #ffffff; line-height: 24px;">
                    &copy; {{ date('Y') }} <a href="{{ URL::to('/') }}" style="color: #fff; font-size: 1em;text-decoration:none;">{{ config('app.name') }}</a> All rights reserved.
                </td>
                <td style="font-family: Candara; font-size: 1em; color: #ffffff; line-height: 24px;" align="right">
                    <a href="{{ config('app.name') }}" style="color: #fff; font-size: 1em;text-decoration:none;">{{ request()->getHost() }}</a>
                </td>
                <td width="30"></td>
            </tr>
            <tr>
                <td height="10" style="font-size: 1px; line-height: 10px;">&nbsp;</td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>
</body>
</html>