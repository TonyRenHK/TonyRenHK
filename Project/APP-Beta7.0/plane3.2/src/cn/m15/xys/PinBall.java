package cn.m15.xys;

import java.util.Random;
import java.util.Timer;
import java.util.TimerTask;

import android.app.Activity;
import android.content.Context;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.view.Display;
import android.view.MotionEvent;
import android.view.View.OnClickListener;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;

/**
 * Description: <br/>
 * MSC
 * 
 * This program is developed by HKUST
 * Program Name: <br/>
 * Date:
 * 
 * @author Ren chengkun 
 * @version 1.0
 */



public class PinBall extends Activity {
    // 
    private int tableWidth;
    // 
    private int tableHeight;
    // racket Y
    private int racketY;
    // racket height and width
    private final int RACKET_HEIGHT = 20;
    private final int RACKET_WIDTH = 250;
    // size of ball
    private final int BALL_SIZE = 24;
    // speed  Y
    private int ySpeed = 30;
    Random rand = new Random();
    // return -0.5-0.5 ratio , to control the direction of ball返回一个-0.5~0.5的比率，用于控制小球的运行方向。
    private double xyRate = rand.nextDouble() - 0.5;
    // speed  X
    private int xSpeed = (int) (ySpeed * xyRate * 2);
    // ballX and ballY present the ball's position  ballX和ballY代表小球的座标
    private int ballX = rand.nextInt(200) + 20;
    private int ballY = rand.nextInt(10) + 20;
    // racketX
    private int racketX = rand.nextInt(200);
    // game is over?
    private boolean isLose = false;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        SysApplication.getInstance().addActivity(this);
        //add activity 
        // no title
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        // full screen 
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        // create PlaneView package
        final GameView gameView = new GameView(this);
        setContentView(gameView);
        // get windowManager
        WindowManager windowManager = getWindowManager();
        Display display = windowManager.getDefaultDisplay();
        // get screen hight and width
        tableWidth = display.getWidth();
        tableHeight = display.getHeight();
        racketY = tableHeight - 200;
        final Handler handler = new Handler() {
            public void handleMessage(Message msg) {
                if (msg.what == 0x123) {
                    gameView.invalidate();
                }
            }
        };

//        gameView.setOnKeyListener(new OnKeyListener() {
//            @Override
//            public boolean onKey(View source, int keyCode, KeyEvent event) {
//                // 获取由哪个键触发的事件
//                switch (event.getKeyCode()) {
//                // 控制挡板左移
//                    case KeyEvent.KEYCODE_DPAD_LEFT:
//                        if (racketX > 0)
//                            racketX -= 10;
//                        break;
//                    // 控制挡板右移
//                    case KeyEvent.KEYCODE_DPAD_RIGHT:
//                        if (racketX < tableWidth - RACKET_WIDTH)
//                            racketX += 10;
//                        break;
//                }
//                // 通知planeView组件重绘
//                gameView.invalidate();
//                return true;
//            }
//            }
//        )
//        ;

            gameView.setOnClickListener(new OnClickListener() {
                
                @Override
                public void onClick(View v) {
                    // TODO Auto-generated method stub
                    
                }
            });
//            gameView.setOnTouchListener(new onTouchListener(){
//            public boolean onTouch(View v, MotionEvent event) {
//                // 获取拖动事件的发生位置
//                float x = event.getX();
//                float y = event.getY();
//                switch (event.getAction()) {
//                    case MotionEvent.ACTION_DOWN:
////                        path.moveTo(x, y);
//                        racketX = (int)x;
////                        preY = y;
//                        break;
//                    case MotionEvent.ACTION_MOVE:
////                        path.quadTo(racketX, null, x, y);
//                        racketX = (int)x;
////                        preY = y;
//                        break;
//                    case MotionEvent.ACTION_UP:
////                        cacheCanvas.drawPath(path, paint); // ①
////                        path.reset();
//                        break;
//                }
//                return true;
//            }
//        });
            
            
        final Timer timer = new Timer();
        timer.schedule(new TimerTask() {

            @Override
            public void run() {
                // once the ball touch the left wall  如果小球碰到左边边框
                if (ballX <= 0 || ballX >= tableWidth - BALL_SIZE) {
                    xSpeed = -xSpeed;
                }
                // if the ball lower than racket position 如果小球高度超出了球拍位置，且横向不在球拍范围之内，游戏结束。
                if (ballY >= racketY - BALL_SIZE
                        && (ballX < racketX || ballX > racketX + RACKET_WIDTH)) {
                    timer.cancel();
                    // 设置游戏是否结束的旗标为true。
                    isLose = true;
                }
                // 如果小球位于球拍之内，且到达球拍位置，小球反弹
                else if (ballY <= 0
                        || (ballY >= racketY - BALL_SIZE && ballX > racketX && ballX <= racketX
                                + RACKET_WIDTH)) {
                    ySpeed = -ySpeed;
                }
                // 小球座标增加
                ballY += ySpeed;
                ballX += xSpeed;
                // 发送消息，通知系统重绘组件
                handler.sendEmptyMessage(0x123);
            }
        }, 0, 100);
    }

    class GameView extends View {
        public GameView(Context context) {
            super(context);
            setFocusable(true);
        }

        //overwrite View onDraw to realise painting 重写View的onDraw方法，实现绘画
        public void onDraw(Canvas canvas) {
            Paint paint = new Paint();
            paint.setStyle(Paint.Style.FILL);
            // 如果游戏已经结束
            if (isLose) {
                paint.setColor(Color.RED);
                paint.setTextSize(40);
                canvas.drawText("Game over", 50, 200, paint);
            }
            // 如果游戏还未结束
            else {
                // draw color and ball 设置颜色，并绘制小球
            	//Draw the specified circle using the specified paint. 
            	//If radius is <= 0, then nothing will be drawn. 
            	//The circle will be filled or framed based on the Style in the paint.
                paint.setColor(Color.rgb(240, 240, 80));
                canvas.drawCircle(ballX, ballY, BALL_SIZE, paint);
                //draw color and racket  设置颜色，并绘制球拍
                paint.setColor(Color.rgb(80, 80, 200));
                canvas.drawRect(racketX, racketY, racketX + RACKET_WIDTH,
                        racketY + RACKET_HEIGHT, paint);
            }
        }
        
        public boolean onTouchEvent(MotionEvent event) {
         // 获取拖动事件的发生位置
          float x = event.getX();
          float y = event.getY();
          switch (event.getAction()) {
              case MotionEvent.ACTION_DOWN:
//                  path.moveTo(x, y);
                  racketX = (int)x;
//                  preY = y;
                  break;
              case MotionEvent.ACTION_MOVE:
//                  path.quadTo(racketX, null, x, y);
                  racketX = (int)x;
//                  preY = y;
                  break;
              case MotionEvent.ACTION_UP:
//                  cacheCanvas.drawPath(path, paint); // ①
//                  path.reset();
                  break;
          }
          return true;
        }
    }
}