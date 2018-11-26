package cn.m15.xys;

import android.app.Activity;
import android.app.ActivityManager;
import android.app.Application;
import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.view.WindowManager;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.LinearLayout;


public class startActivity extends Activity {
    Context mContext = null;
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
	setContentView(R.layout.main);
	SysApplication.getInstance().addActivity(this);
	mContext = this;
        
	/**进入游戏世界 - SurfaceView**/
        Button botton0 = (Button)findViewById(R.id.button0);
        botton0.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	Intent intent = new Intent(startActivity.this, PinBall.class);
	    	startActivity(intent);
		 
	    }
	});
        Button botton1 = (Button)findViewById(R.id.button1);
        botton1.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {

	    	Intent intent = new Intent(startActivity.this, SlyButton.class);
	    	startActivity(intent);
	    }
	});
        Button botton2 = (Button)findViewById(R.id.button2);
        botton2.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	Intent intent = new Intent(startActivity.this, MainActivity.class);
	    	startActivity(intent);
	    }
	});
        
        Button start_id = (Button)findViewById(R.id.start_id);
        start_id.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	LinearLayout mFloatLayout;
	    	WindowManager.LayoutParams wmParams = new WindowManager.LayoutParams();
	        WindowManager mWindowManager;
	        Intent intent = new Intent(startActivity.this,FxService.class); 
	        startService(intent);
	    }
	});
        
        Button remove_id = (Button)findViewById(R.id.remove_id);
        remove_id.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	Intent intent = new Intent(startActivity.this, FxService.class);
			stopService(intent);
	    }
	});
        
        Button hide_setting_id = (Button)findViewById(R.id.hide_setting_id);
        hide_setting_id.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	finish();
	    	
	    }
	});
        
        Button quit_game_id = (Button)findViewById(R.id.quit_game_id);
        quit_game_id.setOnClickListener(new OnClickListener() {
	    @Override
	    public void onClick(View arg0) {
	    	Intent intent = new Intent(startActivity.this, FxService.class);
			stopService(intent);
	    	System.exit(0);
	    	
	    }
	});
        
        
    }
}
