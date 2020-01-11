CodeIgniter Docker
=

Feature
=
+ Nginx <br />
+ Redis <br />
+ PHP 7.4 <br />
+ RABBIT MQ <br />
+ MARIA DB <br />
+ Codeigniter 3.1.1 <br />

Usage
=
`
$ cd Infra && docker-compose up
`
<h2>Change Log</h2>

<h4>Version 1.0.0</h5>
<ul>
    <li>Nginx</li>
    <li>Redis</li>
    <li>PHP 7.4</li>
    <li>RABBIT MQ</li>
    <li>Codeigniter 3.1.1</li>
    <li>Composer
        <ul>
            <li>Guzzle</li>
            <li>DotEnv</li>
            <li>Rabbit MQ</li>
        </ul>
    </li>
</ul>

Env
=
<ul>
    <li>Docker
        <ul>
            <li> DB_USER_ID : mysql user id </li>
            <li> DB_USER_PW : mysql user password </li>
            <li> DB_ROOT_PW : mysql root password </li>
            <li> MQ_USER_ID : rabbit mq user id </li>
            <li> MQ_USER_PW : rabbit mq user password </li>
            <li> PROJECT_PATH : codeigniter project path </li>
        </ul>
    </li>
    <li>Codeigniter
        <ul>
            <li> REDIS_HOST : redis host <br>&nbsp;   recommand : tcp://redis:6379 </li>
            <li> DB_HOST : mysql host <br>&nbsp;&nbsp;recommand : db  </li>
            <li> DB_USER_ID : mysql user id </li>
            <li> DB_USER_PW : mysql user password </li>
            <li> MQ_USER_ID : rabbit mq user id </li>
            <li> MQ_USER_PW : rabbit mq user password </li>
            <li> MQ_HOST : rabbit mq user password <br>recommand : megqeue </li>
        </ul>
    </li>
</ul>

License
-
MIT (c) osh12201@gmail.com


<h2>Contact : osh12201@gmail.com</h2>   
