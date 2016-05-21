<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Twilio Chat Application</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/digitalk.css'); ?>"> 
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/digitalk.js'); ?>"></script>
    </head>
    <body>
        <div id="snippetContent" style="padding-top:10px;"> 
            <div class="content container-fluid bootstrap snippets">
                <div class="row row-broken">
                    <div class="col-sm-9 col-xs-12 chat" style="overflow: hidden; outline: none;" tabindex="5001">
                        <div class="col-inside-lg decor-default">
                            <div class="chat-body">
                                <h6>Twilio Chat</h6>
                                <div class="answer left">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status offline"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                        <div class="status offline"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer left">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status online"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> ...</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                        <div class="status busy"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status off"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer left">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                        <div class="status offline"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status offline"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer left">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                        <div class="status online"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> ...</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status busy"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer right">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                        <div class="status off"></div>
                                    </div>
                                    <div class="name">Alexander Herthic</div>
                                    <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                    <div class="time">5 min ago</div>
                                </div>
                                <div class="answer-add"> 
                                    <input placeholder="Write a message"> 
                                    <span class="answer-btn answer-btn-1"></span> 
                                    <span class="answer-btn answer-btn-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
                            <div class="chat-users">
                                <h6>Online</h6>
                                <div class="user" data-id="1">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                        <div class="status online"></div>
                                    </div>
                                    <div class="name">Gargi Pal</div>
                                    <div class="mood">Available</div>
                                </div>
                                <div class="user" data-id="2">
                                    <div class="avatar"> 
                                        <img src="http://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                        <div class="status online"></div>
                                    </div>
                                    <div class="name">Sudipta Mitra</div>
                                    <div class="mood">Available</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>