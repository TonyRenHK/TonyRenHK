package cn.m15.xys;

import android.content.Context;
import android.content.SharedPreferences;
import android.util.Log;

public class DataUtil {

	public static void saveMap(Context context, int x, int y, int value){
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		SharedPreferences.Editor editor = sp.edit();
		editor.putInt( x + "" + y , value);
		Log.d("winson", x + "" + y + "=" + value);
		editor.commit();
	}
	
	public static void saveNowScore(Context context, int score){
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		SharedPreferences.Editor editor = sp.edit();
		editor.putInt( "now_score" , score);
		editor.commit();
	}

	public static int loadMap(Context context, int x, int y) {
		// TODO Auto-generated method stub
		Log.d("winson", "duquzhong");
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		Log.d("winson", x + "" + y + "=" + sp.getInt(x + "" + y, 0));
		return sp.getInt(x + "" + y, 0);
	}
	
	public static int loadNowScore(Context context) {
		// TODO Auto-generated method stub
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		return sp.getInt("now_score", 0);
	}
	
	public static void saveTopScore(Context context, int score){
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		SharedPreferences.Editor editor = sp.edit();
		editor.putInt( "top_score" , score);
		editor.commit();
	}
	
	public static int loadTopScore(Context context) {
		// TODO Auto-generated method stub
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		return sp.getInt("top_score", 0);
	}
	
	public static int loadType(Context context) {
		// TODO Auto-generated method stub
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		return sp.getInt("type", 0);
	}
	public static void saveType(Context context, int type){
		SharedPreferences sp = context.getSharedPreferences("pplo_tzfe", Context.MODE_PRIVATE);
		SharedPreferences.Editor editor = sp.edit();
		editor.putInt( "type" , type);
		editor.commit();
	}
}
