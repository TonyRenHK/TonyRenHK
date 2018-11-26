package cn.m15.xys;

import java.util.ArrayList;
import java.util.Random;

import android.content.Context;
import android.content.res.Resources;
import android.graphics.Bitmap;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.graphics.Rect;
import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.util.AttributeSet;
import android.util.Log;
import android.view.KeyEvent;
import android.view.MotionEvent;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;


public class SlyButtonView extends View {
	private static final String TAG = "SlyButtonView";

    /**
     * Labels for the drawables that will be loaded.
     */
    private static final int RED_STAR = 1;
    private static final int YELLOW_STAR = 2;
    private static final int GREEN_STAR = 3;

    /**
     * mScore: used to track the number of buttons clicked.
     * mBestScore: used to record the best grade.
     * mRedDelay: number of milliseconds between red button disappears. 
     * mRedScore: score for click one red button.
     * totalButtonNumInScreen: total button number in the screen.
     */
    public long mScore = 0;
    public long mBestScore;
    final static long mRedDelay = 1000;
    final static long mYellowDelay = 625;
    final static long mGreenDelay = 500;

    final static int mRedScore = 50;
    final static int mYellowScore = 80;
    final static int mGreenScore = 100;

    private int mButtonSize = 24;
    private int mXButtonCount;
    private int mYButtonCount;
    private int mXOffset;
    private int mYOffset;
    private int mMode;
    final static int READY = 1;
    private int mTimeLeft = 30;//30
    private long mStartTime = 0;
    public int mScreenWidth;
    public int mScreenHight;


    private Bitmap[] mTileArray; 
    TextView mScoreText;
    /**
     * mStatusText: text shows to the user in some run states
     */
 

    /**
     * mButtonList: the random location of the buttons.
     */
    
    private ArrayList<ColorSlyButton> mButtonList = new ArrayList<ColorSlyButton>();

    /**
     * Everyone needs a little randomness in their life
     */
    private static final Random RNG = new Random();
    private Context mContext;

    /**
     * Create a simple handler that we can use to cause animation to happen.  We
     * set ourselves as a target and we can use the sleep()
     * function to cause an update/invalidate to occur at a later date.
     */
    public RefreshHandler mRedrawHandler = new RefreshHandler();

    class RefreshHandler extends Handler {

        @Override
        public void handleMessage(Message msg) {
            SlyButtonView.this.updateTimeLeft();
            SlyButtonView.this.updateButtons();
            SlyButtonView.this.invalidate();
        }

        public void sleep(long delayMillis) {
        	this.removeMessages(0);
            sendMessageDelayed(obtainMessage(0), delayMillis);
        }
    };


    /**
     * Constructs a SnakeView based on inflation from XML
     * 
     * @param context
     * @param attrs
     */
    public SlyButtonView(Context context, AttributeSet attrs) {
        super(context, attrs);
        mContext = context;
        initSlyButtonView();
   }

    public SlyButtonView(Context context, AttributeSet attrs, int defStyle) {
    	super(context, attrs, defStyle);
    	mContext = context;
    	initSlyButtonView();
    }
    
    private void initSlyButtonView() {
        setFocusable(true);

        Resources r = this.getContext().getResources();
        
        resetButtons(4);
        loadButton(RED_STAR, r.getDrawable(R.drawable.redstar));
        loadButton(YELLOW_STAR, r.getDrawable(R.drawable.yellowstar));
        loadButton(GREEN_STAR, r.getDrawable(R.drawable.greenstar));
    	
    }
    
    /**
     * handles touch events in the game. 
     */
  
    public boolean onTouchEvent(MotionEvent event) {
    if (event.getAction() == MotionEvent.ACTION_DOWN){
       if( mMode == READY)
       {
    	   InitButtons();
    	   updateButtons();
    	   mMode = 0;
    	   return true;
       }
       int buttonNum = mButtonList.size();
       int xPoint = (int)event.getX();
       int yPoint = (int)event.getY();
       for (int buttonIndex = 0; buttonIndex < buttonNum; buttonIndex++) {
    	   int xCoord = mXOffset + mButtonList.get(buttonIndex).mCrd.x * mButtonSize;
    	   int yCoord = mYOffset + mButtonList.get(buttonIndex).mCrd.y * mButtonSize;
    	   Rect rc = new Rect(xCoord, yCoord, xCoord + mButtonSize, yCoord + mButtonSize);
	   	   if(rc.contains(xPoint, yPoint)) {
	   		int getScore = mButtonList.get(buttonIndex).mScore;
			mScore += getScore;
			Toast.makeText(mContext, Integer.toString(getScore), Toast.LENGTH_SHORT).show();
			//Toast.makeText(mContext, "Hit the target", Toast.LENGTH_LONG).show();
			mButtonList.get(buttonIndex).mTimeLeft = 0;
			
		}
			
       }
    }
    return super.onTouchEvent(event);
    }

    /**
     * Selects a random location within the garden that is not currently covered
     * by the snake. Currently _could_ go into an infinite loop if the snake
     * currently fills the garden, but we'll leave discovery of this prize to a
     * truly excellent snake-player.
     * 
     */
    public void InitButtons() {
        Coordinate newCoord = null;
        ColorSlyButton newButton = null;
        int score = 0;
        int colorInfo = 0;
        long delay = 0;
        long timenow = System.currentTimeMillis();
        for ( int colorIndex = 1; colorIndex <= 3; colorIndex++ ) {
            switch(colorIndex) {
            case 1:
                score = mRedScore;
                colorInfo = RED_STAR;
                delay = mRedDelay;
                break;
            case 2:
                score = mYellowScore;
                colorInfo = YELLOW_STAR;
                delay = mYellowDelay;
                break;
            case 3:
                score = mGreenScore;
                colorInfo = GREEN_STAR;
                delay = mGreenDelay;
                break;
            default:
                break;
                
            } 
            for ( int num = 1; num <= 3; num ++ ) {
                boolean found = false;
                while (!found) {
                    // Choose a new location for our button
                    int newX = 1 + RNG.nextInt(mXButtonCount - 2);
                    int newY = 1 + RNG.nextInt(mYButtonCount - 2);
                    newCoord = new Coordinate(newX, newY);

                    // Make sure it's not already in used
                    boolean collision = false;
                    
	                int buttonnum= mButtonList.size();
	                for (int index = 0; index < buttonnum; index++) {
	                    if (mButtonList.get(index).mCrd.equals(newCoord)) {
	                        collision = true;
	                    }
	                 }
                  
                    // if we're here and there's been no collision, then we have
                    // a good location for an button. Otherwise, we'll circle back
                    // and try again
                    found = !collision;
                    }
                if (newCoord == null) {
                    Log.e(TAG, "Somehow ended up with a null newCoord!");
                }
                newButton = new ColorSlyButton(newCoord, colorInfo, score, delay, timenow, delay);
                mButtonList.add(newButton);      
            }          
        }
        mStartTime = System.currentTimeMillis();
    }


    /**
     * Handles the basic update loop, checking to see if we are in the running
     * state, determining if a move should be made, updating the snake's location.
     */
    public void updateTimeLeft() {
        int buttonNum = mButtonList.size();
       for (int buttonIndex = 0; buttonIndex < buttonNum; buttonIndex++) {
            if(mButtonList.get(buttonIndex).mTimeLeft  != 0 ) {
		mButtonList.get(buttonIndex).mTimeLeft = getTimeLeftForMove(mButtonList.get(buttonIndex));		
            	}
       }

    }

    /**
     * Figure out which way the snake is going, see if he's run into anything (the
     * walls, himself, or an apple). If he's not going to die, we then add to the
     * front and subtract from the rear in order to simulate motion. If we want to
     * grow him, we don't subtract from the rear.
     * 
     */
    public void updateButtons() {
        // Look for buttons which need move
        int buttonNum = mButtonList.size();
        long timenow = System.currentTimeMillis();
        for (int buttonIndex = 0; buttonIndex < buttonNum; buttonIndex++) {
            if(mButtonList.get(buttonIndex).mTimeLeft  <= 0 ) {
		  Coordinate newCoord = null;
                boolean found = false;
                while (!found) {
                    // Choose a new location for our button
                    int newX = 1 + RNG.nextInt(mXButtonCount - 2);
                    int newY = 1 + RNG.nextInt(mYButtonCount - 2);
                    newCoord = new Coordinate(newX, newY);

                    // Make sure it's not already in used
                    boolean collision = false;
                    int buttonnum= mButtonList.size();
                    for (int index = 0; index < buttonnum; index++) {
                        if (mButtonList.get(index).mCrd.equals(newCoord)) {
                            collision = true;
                        }
                    }
                    // if we're here and there's been no collision, then we have
                    // a good location for an button. Otherwise, we'll circle back
                    // and try again
                    found = !collision;
                    }
                if (newCoord == null) {
                    Log.e(TAG, "Somehow ended up with a null newCoord!");
                }
                mButtonList.get(buttonIndex).mCrd.x = newCoord.x;
                mButtonList.get(buttonIndex).mCrd.y = newCoord.y;   
                mButtonList.get(buttonIndex).mLastMove = timenow;
                mButtonList.get(buttonIndex).mTimeLeft = mButtonList.get(buttonIndex).mMoveDelay;

            	}
				
        }
       mRedrawHandler.sleep(100);
    }

     public long getTimeLeftForMove(ColorSlyButton colorslybutton) {
        
       long now = System.currentTimeMillis();
       long timeconsume =now - colorslybutton.mLastMove;
       long timeleft = colorslybutton.mMoveDelay - timeconsume;
       return timeleft;      
    }
    

    private final Paint mPaint = new Paint();

    /**
     * Rests the internal array of Bitmaps used for drawing tiles, and
     * sets the maximum index of tiles to be inserted
     * 
     * @param tilecount
     */
    
    public void resetButtons(int buttonkindcount) {
    	mTileArray = new Bitmap[buttonkindcount];
    }

    public void setMode(int mode) {
    	mMode = mode;
    }
    public void setTextView(TextView tv) {
    	mScoreText = tv;
    }
    
    
    @Override
    protected void onSizeChanged(int w, int h, int oldw, int oldh) {
        mXButtonCount = (int) Math.floor(w / mButtonSize);
        mYButtonCount = (int) Math.floor(h / mButtonSize);

        mXOffset = ((w - (mButtonSize * mXButtonCount)) / 2);
        mYOffset = ((h - (mButtonSize * mYButtonCount)) / 2);
       

    }

    /**
     * Function to set the specified Drawable as the tile for a particular
     * integer key.
     * 
     * @param key
     * @param tile
     */
    private void loadButton(int key, Drawable tile) {
        Bitmap bitmap = Bitmap.createBitmap(mButtonSize, mButtonSize, Bitmap.Config.ARGB_8888);
        Canvas canvas = new Canvas(bitmap);
        tile.setBounds(0, 0, mButtonSize, mButtonSize);
        tile.draw(canvas);
        
        mTileArray[key] = bitmap;
    }


    @Override
    public void onDraw(Canvas canvas) {
        super.onDraw(canvas);
        if (mStartTime == 0) {
        	mTimeLeft = 30;
        } else { 
            mTimeLeft = 30 - (int)(System.currentTimeMillis() - mStartTime)/1000;
        }
     if (mTimeLeft > 0) {
		 int buttonNum = mButtonList.size();
	     for (int buttonIndex = 0; buttonIndex < buttonNum; buttonIndex++) {
	               canvas.drawBitmap(mTileArray[mButtonList.get(buttonIndex).mColorIndex], 
	                            mXOffset + mButtonList.get(buttonIndex).mCrd.x * mButtonSize,
	                    		mYOffset + mButtonList.get(buttonIndex).mCrd.y * mButtonSize,
	                    		mPaint);
	            }
     
	     mPaint.setColor(Color.BLUE);
	     mPaint.setTextSize(35);
	     canvas.drawText("Score Now£º"+ mScore, 10, mScreenHight - 50, mPaint);
	     //canvas.drawText("HighScore£º"+ mBestScore, mScreenWidth - 150, mScreenHight - 50, mPaint);
	     canvas.drawText("Time_left£º0:" + mTimeLeft ,10,mScreenHight - 20,mPaint);
     } else {
    	 mPaint.setTextSize(60);
    	 canvas.drawText("Game Over!" ,10, (mScreenHight - 60)/2, mPaint); 
      }
    }

    /**
     * Simple class containing two integer values and a comparison function.
     * There's probably something I should use instead, but this was quick and
     * easy to build.
     * 
     */
    private class Coordinate {
        public int x;
        public int y;

        public Coordinate(int newX, int newY) {
            x = newX;
            y = newY;
        }

        public boolean equals(Coordinate other) {
            if (x == other.x && y == other.y) {
                return true;
            }
            return false;
        }

        @Override
        public String toString() {
            return "Coordinate: [" + x + "," + y + "]";
        }
    }

    
    private class ColorSlyButton {
        Coordinate mCrd;  // coordinate of the button
        int mColorIndex;  // the index of color
        int mScore;
        long mMoveDelay;  // if not been clicked, button will move after mMoveDelay millseconds.
        long mLastMove;  //the time of last move
        long mTimeLeft; //the time left before next move   
     
        

        public ColorSlyButton(Coordinate crd, int colorIndex, int score, long moveDelay, 
            long lastMove, long timeLeft) {
            mCrd = new Coordinate(crd.x, crd.y);
            mColorIndex = colorIndex;
            mScore = score;
            mMoveDelay = moveDelay;
            mLastMove = lastMove;
            mTimeLeft = timeLeft;
        }
    }
}
