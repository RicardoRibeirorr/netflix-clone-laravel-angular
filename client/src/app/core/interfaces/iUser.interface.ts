/**
 * iUser - Logged used interface
 */
export interface iUser{
    id:number,
    username:string,
    email:string,
    image_url:string

    userMedias?:Array<iUserMedia>
    favorites?:Array<iFavorites>
    
    created_at:string,
    updated_at:string,
}

/**
 * iUserMedia - User media viewed
 */
export interface iUserMedia{
    user_id:number,
    media_id:number,
    video_id:number,
    is_finished:boolean //As the user watch it all?

    created_at:string,
    updated_at:string,
}

/**
 * iFavorites - User selected favorites list
 */
export interface iFavorites{
    user_id:number,
    media_id:number,

    created_at:string,
    updated_at:string,
}