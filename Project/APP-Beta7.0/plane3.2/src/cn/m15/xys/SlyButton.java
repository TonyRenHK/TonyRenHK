package cn.m15.xys;






import android.app.Activity;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.DisplayMetrics;
import android.view.Window;
import android.widget.TextView;

public class SlyButton extends Activity {
    /** Called when the activity is first created. */
	 private SlyButtonView mSlyButtonView;
	    @Override
	 public void onCreate(Bundle savedInstanceState) {
	        super.onCreate(savedInstanceState);
	
	        setContentView(R.layout.main2);
	        SysApplication.getInstance().addActivity(this);
	        mSlyButtonView = (SlyButtonView) findViewById(R.id.slybutton);
	        DisplayMetrics dm = new DisplayMetrics();
	        getWindowManager().getDefaultDisplay().getMetrics(dm);
	        mSlyButtonView.mScreenWidth = dm.widthPixels;
	        mSlyButtonView.mScreenHight = dm.heightPixels;
	        SharedPreferences scores = getPreferences(0); 
	        mSlyButtonView.mBestScore = scores.getLong("score", 0);
	        mSlyButtonView.setMode(SlyButtonView.READY);
	        mSlyButtonView.setTextView((TextView)findViewById(R.id.current_score));
			
	}

	
}