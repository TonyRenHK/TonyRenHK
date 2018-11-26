package cn.m15.xys;

import android.R.color;
import android.content.Context;
import android.graphics.Color;
import android.graphics.Typeface;
import android.util.Log;
import android.view.Gravity;
import android.view.animation.AnimationUtils;
import android.widget.FrameLayout;
import android.widget.TextView;

public class Card extends FrameLayout {

	private int num;
	private TextView label;
	private String[] strs;
	private static final String[] nums ={"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"} ;
	private static final String[] qings ={"2", "4", "8", "16", "32", "64", "128", "256", "512", "1024", "2048", "4096", "8192"} ;
	
	public Card(Context context) {
		super(context);
		// TODO Auto-generated constructor stub
		label = new TextView(context);
		LayoutParams params = new LayoutParams(LayoutParams.MATCH_PARENT, LayoutParams.MATCH_PARENT);
		params.setMargins(10, 10, 0, 0);
		label.setGravity(Gravity.CENTER);
		label.setTextSize(32);
		
		label.setTypeface(Typeface.DEFAULT_BOLD);
		label.setBackgroundColor(0xffeee4da);
		label.setAnimation(AnimationUtils.loadAnimation(context, android.R.anim.fade_in));
		label.setAnimation(AnimationUtils.loadAnimation(context, android.R.anim.fade_out));
		addView(label, params);
		setNum(0);
	}
	
	public int getNum() {
		return num;
	}

	public void setNum(int num) {
		Log.d("winson", "Type" + DataUtil.loadType(getContext()));
		switch (DataUtil.loadType(getContext())) {
		case 0:
			strs = nums;
			break;
		case 1:
			strs = qings;
			break;
		default:
			break;
		}
	
		this.num = num;
		if (num <= 0) {
			label.setText("");
			label.setBackgroundColor(Color.WHITE);
			label.setTextColor(Color.BLACK);
		}
		else {
			
			if(num == 2){
				label.setText(strs[0]);
				label.setBackgroundColor(Color.WHITE);
				label.setTextColor(Color.BLACK);
			}
			if(num == 4){
				label.setText(strs[1]);
				label.setBackgroundColor(Color.BLUE);
				label.setTextColor(Color.WHITE);
			}
			if(num == 8){
				label.setText(strs[2]);
				label.setBackgroundColor(Color.CYAN);
				label.setTextColor(Color.BLACK);
			}
			if(num == 16){
				label.setText(strs[3]);
				label.setBackgroundColor(Color.DKGRAY);
				label.setTextColor(Color.WHITE);
			}
			if(num == 32){
				label.setText(strs[4]);
				label.setBackgroundColor(Color.GRAY);
				label.setTextColor(Color.WHITE);
			}
			if(num == 64){
				label.setText(strs[5]);
				label.setBackgroundColor(Color.GREEN);
				label.setTextColor(Color.WHITE);
			}
			if(num == 128){
				label.setText(strs[6]);
				label.setBackgroundColor(Color.LTGRAY);
				label.setTextColor(Color.WHITE);
			}
			if(num == 256){
				label.setText(strs[7]);
				label.setBackgroundColor(Color.MAGENTA);
				label.setTextColor(Color.WHITE);
			}
			if(num == 512){
				label.setText(strs[8]);
				label.setBackgroundColor(Color.RED);
				label.setTextColor(Color.WHITE);
			}
			if(num == 1024){
				label.setText(strs[9]);
				label.setBackgroundColor(Color.YELLOW);
				label.setTextColor(Color.BLACK);
			}
			if(num == 2048){
				label.setText(strs[10]);
				label.setBackgroundColor(Color.rgb(34, 26, 92));
				label.setTextColor(Color.WHITE);
			}
			if(num == 4096){
				label.setText(strs[11]);
				label.setBackgroundColor(Color.rgb(62, 52, 63));
				label.setTextColor(Color.WHITE);
			}
			
		}
	}
	
	public boolean equals(Card card) {
		return getNum() == card.getNum();
	}
}
