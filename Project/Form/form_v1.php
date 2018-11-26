<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
        <style>
            label.error {
                color: red;
                font-size: 16px;
                font-weight: normal;
                line-height: 1.4;
                margin-top: 0.5em;
                width: 100%;
                float: none;
            }
            @media screen and (orientation: portrait) {
                label.error {
                    margin-left: 0;
                    display: block;
                }
            }
            @media screen and (orientation: landscape) {
                label.error {
                    display: inline-block;
                    margin-left: 22%;
                }
            }
            em {
                color: red;
                font-weight: bold;
                padding-right: .25em;
            }
        </style>
    </head>
    <body>
        <div id="page1" data-role="page">
            <div data-role="header">
                <h1>信息登记</h1>
            </div>
            <div data-role="content">
                <form method="post"   action="form_success.php">
                    
                    
                    <div data-role="fieldcontain">
                        <label for="name">姓名<span style="color:red; ">*</span>:</label>
                        <input type="text" name="name" id="name" value="" required="required" />
                    </div>	
                    
                    <div data-role="fieldcontain">
                        <label for="wechat">微信/QQ<span style="color:red; ">*</span>:</label>
                        <input type="text" name="wechat" id="wechat" value="" required="required" />
                    </div>	
                    
                    <div data-role="fieldcontain">
                        <label for="email">Email:<span style="color:red; ">*</span></label>
                        <input type="email" name="email" id="email">
                    </div>
                    
                    <fieldset data-role="controlgroup">
                        <legend>请选择您的性别：</legend>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male" checked>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female">	
                    </fieldset>
                    
                    <div data-role="fieldcontain">
                        <label for="textarea">给我们留言</label>
                        <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
                    </div>
                    
                    
                    <input data-role="submit" type="submit" value="提交">
                    
                </form>
                
                
                
                
            </div>
            
            <p style="text-align:center">
                Copyright © <a href="http://1.likehongkong.sinaapp.com">LikeHK</a> 
            </p>
        </div>
        
        
        
        <script>
            $( "#page1" ).on( "pageinit", function() {
                $( "form" ).validate({
                    rules: {
                        email: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    errorPlacement: function( error, element ) {
                        error.insertAfter( element.parent() );
                    }
                });
            });
        </script>
    </body>
</html>