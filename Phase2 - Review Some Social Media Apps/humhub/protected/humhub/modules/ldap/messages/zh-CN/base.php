<?php

return [
    'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => '在生产环境中强烈建议使用ATLS / SSL，以防止明文传输密码',
    'Base DN' => '基于DN',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => '定义过滤器应用，当尝试登录。 ％的uid替换登录操作的用户名。例如：＆QUOT;（sAMAccountName赋=％S）和QUOT;或QUOT;（UID =％S）和QUOT',
    'E-Mail Address Attribute' => '邮件属性',
    'Enable LDAP Support' => '生效LDAP支持',
    'Encryption' => '加密',
    'Fetch/Update Users Automatically' => '自动拉取/更新 用户',
    'Hostname' => '主机名',
    'Login Filter' => '登录过滤',
    'Password' => '密码',
    'Port' => '端口',
    'Status: Error! (Message: {message})' => '状态：错误！(信息：{message})',
    'Status: OK! ({userCount} Users)' => '状态：OK！ ({userCount} 用户)',
    'The default base DN used for searching for accounts.' => '默认的基本DN用于搜索帐户',
    'The default credentials password (used only with username above).' => '默认凭据的密码（仅用于以上用户名）。',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => '默认凭据用户名。有些服务器要求该DN格式。这必须在DN形式给出，如果LDAP服务器需要一个DN绑定和绑定应尽可能用简单的用户名',
    'User Filter' => '用户过滤',
    'Username' => '用户名',
    'Username Attribute' => '用户属性',
    'ID Attribute' => '',
    'Ignored LDAP entries' => '',
    'LDAP' => '',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => '',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => '',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => '',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => '',
    'One DN per line which should not be imported automatically.' => '',
    'Specify your LDAP-backend used to fetch user accounts.' => '',
    'Status: Warning! (No users found using the ldap user filter!)' => '',
];