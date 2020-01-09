This directory contains:

a) Action classes - each action is a class. Action classes start from a, followed by name of action. For example:
if action is called "test", class action must be called "aTest".

b) Action factory classes - each role (User, admin, etc) should have owned factory. Factory classes start from f, followed by name
of role and then "Factory". For example: if role is called "user", factory class must be called "fUserFactory".

c) cActionFactoryFactory - factory of factories. This class creates action factory by role.

d) iAction and iActionFactory - interfaces - action classes implement iAction interface and action factory classes implement
iActionFactory interface.

e) aInit class - class that initiate application.

f) cResponse class - class that represents a response, contains info about status code, content-type and response body. Do not
modify, please.

You can add, modify, delete action classes and action factory classes, but please, do not touch interfaces and general
cActionFactoryFactory.php file and aInit class, because otherwise system could collapse.